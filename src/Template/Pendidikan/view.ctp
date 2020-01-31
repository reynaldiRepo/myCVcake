<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pendidikan $pendidikan
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pendidikan'), ['action' => 'edit', $pendidikan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pendidikan'), ['action' => 'delete', $pendidikan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pendidikan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pendidikan'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pendidikan'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pendidikan view large-9 medium-8 columns content">
    <h3><?= h($pendidikan->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tahun In') ?></th>
            <td><?= h($pendidikan->tahun_in) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tahun Out') ?></th>
            <td><?= h($pendidikan->tahun_out) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pendidikan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User') ?></th>
            <td><?= $this->Number->format($pendidikan->id_user) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Ket') ?></h4>
        <?= $this->Text->autoParagraph(h($pendidikan->ket)); ?>
    </div>
</div>
