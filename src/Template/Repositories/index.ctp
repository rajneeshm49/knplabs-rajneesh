<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Repository[]|\Cake\Collection\CollectionInterface $repositories
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Repository'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="repositories index large-9 medium-8 columns content">
    <h3><?= __('Repositories') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('full_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('git_url') ?></th>
            </tr>
        </thead>
        <tbody id="pageCont">
            <?php foreach ($repositories as $repository): ?>
            <tr>
                <td><?= $this->Number->format($repository->id) ?></td>
                <td><?= h($repository->name) ?></td>
                <td><?= h($repository->full_name) ?></td>
                <td><?= $this->Number->format($repository->size) ?></td>
                <td><?= h($repository->updated_at) ?></td>
                <td><?= h($repository->git_url) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<div id="div1">
	<?php
		
		for($ct=1;$ct<=$pages;$ct++) {
			echo "<button id=\"$ct\" class=\"btnpage\">$ct</button>";
		}
	?>
	</div>
	
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.btnpage').click(function() {
		
		$.ajax({
			type: "POST",
			url: '<?php echo \Cake\Routing\Router::url(array('controller' => 'repositories', 'action' => 'changepage')); ?>',
			data: 'a='+$(this).attr('id'),
			success: function(result) {
				$('#pageCont').html(result);
			}
		});
	})
})
</script>
