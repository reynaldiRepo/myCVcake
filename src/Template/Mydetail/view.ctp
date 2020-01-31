<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mydetail $mydetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mydetail'), ['action' => 'edit', $mydetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mydetail'), ['action' => 'delete', $mydetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mydetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mydetail'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mydetail'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mydetail view large-9 medium-8 columns content">
    <h3><?= h($mydetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mydetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User') ?></th>
            <td><?= $this->Number->format($mydetail->id_user) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Ket') ?></h4>
        <?= $this->Text->autoParagraph(h($mydetail->ket)); ?>
    </div>
</div>
