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
	<div><input type="text" id="rpos" placeholder="Repository name"><button id="search_submit" type="button" disabled>Submit</button>&nbsp;
	<button id="clear" disabled type="button">Clear</button></div>
	<input type="hidden" id="search_id">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Full Name</th>
                <th scope="col">Size</th>
                <th scope="col">Uupdated at</th>
                <th scope="col">Git url</th>
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

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
	
	$( "#rpos" ).autocomplete({
        source: '<?php echo \Cake\Routing\Router::url(array('controller' => 'repositories', 'action' => 'search')); ?>',
		select: function (event, ui) {
			$('#search_id').val(ui.item.data);
			$('#search_submit').removeAttr('disabled');
		}
    });
	
	$( "#search_submit" ).click(function() {
		$.ajax({
			type: "POST",
			url: '<?php echo \Cake\Routing\Router::url(array('controller' => 'repositories', 'action' => 'searchpage')); ?>',
			data: 'id='+$('#search_id').val(),
			success: function(result) {
				$('#pageCont').html(result);
				$('#div1').hide();
				$('#clear').removeAttr('disabled');
			}
		});
	})
	
	$('#clear').click(function() {
		
		$.ajax({
			type: "POST",
			url: '<?php echo \Cake\Routing\Router::url(array('controller' => 'repositories', 'action' => 'changepage')); ?>',
			data: 'a=1',
			success: function(result) {
				$('#pageCont').html(result);
				$('#div1').show();
				$('#search_id').val();
				$('#rpos').autocomplete('close').val('');
				$('#search_submit').attr('disabled', true);
				$('#clear').attr('disabled', true);
			}
		});
	})
})

</script>
