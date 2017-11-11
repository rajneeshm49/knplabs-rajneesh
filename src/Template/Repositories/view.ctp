<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Repository $repository
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Repository'), ['action' => 'edit', $repository->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Repository'), ['action' => 'delete', $repository->id], ['confirm' => __('Are you sure you want to delete # {0}?', $repository->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Repositories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Repository'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="repositories view large-9 medium-8 columns content">
    <h3><?= h($repository->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($repository->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Full Name') ?></th>
            <td><?= h($repository->full_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Git Url') ?></th>
            <td><?= h($repository->git_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($repository->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Size') ?></th>
            <td><?= $this->Number->format($repository->size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($repository->updated_at) ?></td>
        </tr>
    </table>
</div>
