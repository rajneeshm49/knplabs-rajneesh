<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Repositories Model
 *
 * @method \App\Model\Entity\Repository get($primaryKey, $options = [])
 * @method \App\Model\Entity\Repository newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Repository[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Repository|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Repository patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Repository[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Repository findOrCreate($search, callable $callback = null, $options = [])
 */
class RepositoriesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('repositories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->allowEmpty('name');

        $validator
            ->scalar('full_name')
            ->allowEmpty('full_name');

        $validator
            ->integer('size')
            ->allowEmpty('size');

        $validator
            ->date('updated_at')
            ->allowEmpty('updated_at');

        $validator
            ->scalar('git_url')
            ->allowEmpty('git_url');

        return $validator;
    }
}
