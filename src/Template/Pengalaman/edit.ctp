<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pengalaman $pengalaman
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pengalaman->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pengalaman->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pengalaman'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pengalaman form large-9 medium-8 columns content">
    <?= $this->Form->create($pengalaman) ?>
    <fieldset>
        <legend><?= __('Edit Pengalaman') ?></legend>
        <?php
            echo $this->Form->control('ket');
            echo $this->Form->control('tahun_in');
            echo $this->Form->control('tahun_out');
            echo $this->Form->control('id_user');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
