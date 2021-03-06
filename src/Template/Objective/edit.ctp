<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Objective $objective
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $objective->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $objective->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Objective'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="objective form large-9 medium-8 columns content">
    <?= $this->Form->create($objective) ?>
    <fieldset>
        <legend><?= __('Edit Objective') ?></legend>
        <?php
            echo $this->Form->control('ket');
            echo $this->Form->control('id_user');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
