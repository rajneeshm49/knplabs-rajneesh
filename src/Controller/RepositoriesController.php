<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Repositories Controller
 *
 * @property \App\Model\Table\RepositoriesTable $Repositories
 *
 * @method \App\Model\Entity\Repository[] paginate($object = null, array $settings = [])
 */
class RepositoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
	 
	public function changepage()
	{
		$data = $this->request->data;
		$aa = $data['a'];
		$repos = $this->Repositories->find('all', ['limit' => 5, 'offset' => (($aa*5)-5)]);
		$cont = '';
		foreach ($repos as $repo) {
            $cont .= '<tr><td>'.$repo->id.'</td><td>'.$repo->name.'</td><td>'.$repo->full_name.'</td><td>'.$repo->size.'</td><td>'.$repo->updated_at.'</td><td>'.$repo->git_url.'</td></tr>';
		}
		echo $cont;exit;
	} 
    public function index()
    {
        $repositories = $this->Repositories->find('all', ['limit' => 5, 'offset' => 0]);
		$record_cnt = $this->Repositories->find()->count();
		$pages = ceil($record_cnt/5);
        $this->set(compact('repositories', 'pages'));
        $this->set('_serialize', ['repositories', 'pages']);
    }

    /**
     * View method
     *
     * @param string|null $id Repository id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $repository = $this->Repositories->get($id, [
            'contain' => []
        ]);

        $this->set('repository', $repository);
        $this->set('_serialize', ['repository']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $repository = $this->Repositories->newEntity();
        if ($this->request->is('post')) {
            $repository = $this->Repositories->patchEntity($repository, $this->request->getData());
            if ($this->Repositories->save($repository)) {
                $this->Flash->success(__('The repository has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The repository could not be saved. Please, try again.'));
        }
        $this->set(compact('repository'));
        $this->set('_serialize', ['repository']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Repository id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $repository = $this->Repositories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $repository = $this->Repositories->patchEntity($repository, $this->request->getData());
            if ($this->Repositories->save($repository)) {
                $this->Flash->success(__('The repository has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The repository could not be saved. Please, try again.'));
        }
        $this->set(compact('repository'));
        $this->set('_serialize', ['repository']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Repository id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $repository = $this->Repositories->get($id);
        if ($this->Repositories->delete($repository)) {
            $this->Flash->success(__('The repository has been deleted.'));
        } else {
            $this->Flash->error(__('The repository could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
