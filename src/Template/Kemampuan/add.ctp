<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kemampuan $kemampuan
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Kemampuan'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="kemampuan form large-9 medium-8 columns content">
    <?= $this->Form->create($kemampuan) ?>
    <fieldset>
        <legend><?= __('Add Kemampuan') ?></legend>
        <?php
            echo $this->Form->control('ket');
            echo $this->Form->control('rate');
            echo $this->Form->control('id_user');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
