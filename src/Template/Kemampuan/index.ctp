<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kemampuan[]|\Cake\Collection\CollectionInterface $kemampuan
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Kemampuan'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kemampuan index large-9 medium-8 columns content">
    <h3><?= __('Kemampuan') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_user') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kemampuan as $kemampuan): ?>
            <tr>
                <td><?= $this->Number->format($kemampuan->id) ?></td>
                <td><?= $this->Number->format($kemampuan->rate) ?></td>
                <td><?= $this->Number->format($kemampuan->id_user) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $kemampuan->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kemampuan->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kemampuan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kemampuan->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
