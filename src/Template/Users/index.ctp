<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Users</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->firstname) ?></td>
                <td><?= h($user->lastname) ?></td>
                <td><?= h($user->username) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<div id="div1"><button id="1" class="btnpage">1</button><button id="2" class="btnpage">2</button></div>
    
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('.btnpage').click(function() {
		
		$.ajax({
			type: "POST",
			url: '<?php echo \Cake\Routing\Router::url(array('controller' => 'users', 'action' => 'changepage')); ?>',
			data: 'a='+$(this).attr('id'),
			success: function(result) {
				$('#pageCont').html(result);
			}
		});
	})
})
</script>