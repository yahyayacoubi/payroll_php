<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payroll $payroll
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payroll'), ['action' => 'edit', $payroll->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payroll'), ['action' => 'delete', $payroll->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payroll->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payrolls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payroll'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="payrolls view large-9 medium-8 columns content">
    <h3><?= h($payroll->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $payroll->has('employee') ? $this->Html->link($payroll->employee->id, ['controller' => 'Employees', 'action' => 'view', $payroll->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($payroll->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($payroll->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job') ?></th>
            <td><?= h($payroll->job) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month') ?></th>
            <td><?= h($payroll->month) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($payroll->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wage') ?></th>
            <td><?= $this->Number->format($payroll->wage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hour') ?></th>
            <td><?= $this->Number->format($payroll->hour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pay') ?></th>
            <td><?= $this->Number->format($payroll->pay) ?></td>
        </tr>
    </table>
</div>
