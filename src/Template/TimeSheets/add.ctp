<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TimeSheet $timeSheet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Time Sheets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="timeSheets form large-9 medium-8 columns content">
    <?= $this->Form->create($timeSheet) ?>
    <fieldset>
        <legend><?= __('Add Time Sheet') ?></legend>
        <?php
            echo $this->Form->control('employee_id', ['options' => $employees]);
            echo $this->Form->control('month');
            echo $this->Form->control('hours');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
