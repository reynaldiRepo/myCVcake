<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Portofolio $portofolio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Portofolio'), ['action' => 'edit', $portofolio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Portofolio'), ['action' => 'delete', $portofolio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portofolio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Portofolio'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Portofolio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="portofolio view large-9 medium-8 columns content">
    <h3><?= h($portofolio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($portofolio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User') ?></th>
            <td><?= $this->Number->format($portofolio->id_user) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Judul') ?></h4>
        <?= $this->Text->autoParagraph(h($portofolio->judul)); ?>
    </div>
    <div class="row">
        <h4><?= __('Ket') ?></h4>
        <?= $this->Text->autoParagraph(h($portofolio->ket)); ?>
    </div>
    <div class="row">
        <h4><?= __('Link') ?></h4>
        <?= $this->Text->autoParagraph(h($portofolio->link)); ?>
    </div>
</div>
