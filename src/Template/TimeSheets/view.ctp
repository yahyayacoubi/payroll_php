<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TimeSheet $timeSheet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Time Sheet'), ['action' => 'edit', $timeSheet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Time Sheet'), ['action' => 'delete', $timeSheet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timeSheet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Time Sheets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Time Sheet'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="timeSheets view large-9 medium-8 columns content">
    <h3><?= h($timeSheet->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $timeSheet->has('employee') ? $this->Html->link($timeSheet->employee->id, ['controller' => 'Employees', 'action' => 'view', $timeSheet->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month') ?></th>
            <td><?= h($timeSheet->month) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($timeSheet->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hours') ?></th>
            <td><?= $this->Number->format($timeSheet->hours) ?></td>
        </tr>
    </table>
</div>
