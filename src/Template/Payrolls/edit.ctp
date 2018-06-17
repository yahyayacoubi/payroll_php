<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payroll $payroll
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $payroll->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $payroll->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Payrolls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="payrolls form large-9 medium-8 columns content">
    <?= $this->Form->create($payroll) ?>
    <fieldset>
        <legend><?= __('Edit Payroll') ?></legend>
        <?php
            echo $this->Form->control('employee_id', ['options' => $employees]);
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('job');
            echo $this->Form->control('wage');
            echo $this->Form->control('hour');
            echo $this->Form->control('pay');
            echo $this->Form->control('month');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
