<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pengalaman $pengalaman
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pengalaman'), ['action' => 'edit', $pengalaman->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pengalaman'), ['action' => 'delete', $pengalaman->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pengalaman->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pengalaman'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pengalaman'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pengalaman view large-9 medium-8 columns content">
    <h3><?= h($pengalaman->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tahun In') ?></th>
            <td><?= h($pengalaman->tahun_in) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tahun Out') ?></th>
            <td><?= h($pengalaman->tahun_out) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pengalaman->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User') ?></th>
            <td><?= $this->Number->format($pengalaman->id_user) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Ket') ?></h4>
        <?= $this->Text->autoParagraph(h($pengalaman->ket)); ?>
    </div>
</div>
