<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kemampuan $kemampuan
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Kemampuan'), ['action' => 'edit', $kemampuan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Kemampuan'), ['action' => 'delete', $kemampuan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kemampuan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Kemampuan'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kemampuan'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="kemampuan view large-9 medium-8 columns content">
    <h3><?= h($kemampuan->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($kemampuan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rate') ?></th>
            <td><?= $this->Number->format($kemampuan->rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User') ?></th>
            <td><?= $this->Number->format($kemampuan->id_user) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Ket') ?></h4>
        <?= $this->Text->autoParagraph(h($kemampuan->ket)); ?>
    </div>
</div>
