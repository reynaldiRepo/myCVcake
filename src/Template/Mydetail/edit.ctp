<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mydetail $mydetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mydetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mydetail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mydetail'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mydetail form large-9 medium-8 columns content">
    <?= $this->Form->create($mydetail) ?>
    <fieldset>
        <legend><?= __('Edit Mydetail') ?></legend>
        <?php
            echo $this->Form->control('ket');
            echo $this->Form->control('id_user');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
