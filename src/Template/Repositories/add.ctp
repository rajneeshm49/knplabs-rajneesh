<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Repository $repository
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Repositories'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="repositories form large-9 medium-8 columns content">
    <?= $this->Form->create($repository) ?>
    <fieldset>
        <legend><?= __('Add Repository') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('full_name');
            echo $this->Form->control('size');
            echo $this->Form->control('updated_at', ['empty' => true]);
            echo $this->Form->control('git_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
