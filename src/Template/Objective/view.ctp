<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Objective $objective
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Objective'), ['action' => 'edit', $objective->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Objective'), ['action' => 'delete', $objective->id], ['confirm' => __('Are you sure you want to delete # {0}?', $objective->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Objective'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Objective'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="objective view large-9 medium-8 columns content">
    <h3><?= h($objective->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($objective->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User') ?></th>
            <td><?= $this->Number->format($objective->id_user) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Ket') ?></h4>
        <?= $this->Text->autoParagraph(h($objective->ket)); ?>
    </div>
</div>
