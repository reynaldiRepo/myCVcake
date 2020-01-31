<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Portofolio $portofolio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Portofolio'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="portofolio form large-9 medium-8 columns content">
    <?= $this->Form->create($portofolio) ?>
    <fieldset>
        <legend><?= __('Add Portofolio') ?></legend>
        <?php
            echo $this->Form->control('judul');
            echo $this->Form->control('ket');
            echo $this->Form->control('link');
            echo $this->Form->control('id_user');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
