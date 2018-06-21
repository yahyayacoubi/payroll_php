<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['controller' => 'Jobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Jobs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payrolls'), ['controller' => 'Payrolls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payroll'), ['controller' => 'Payrolls', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Time Sheets'), ['controller' => 'TimeSheets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Time Sheet'), ['controller' => 'TimeSheets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employees view large-9 medium-8 columns content">
    <h3><?= h($employee->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($employee->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($employee->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($employee->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone Number') ?></th>
            <td><?= h($employee->telephone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($employee->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job') ?></th>
            <td><?= $employee->has('job') ? $this->Html->link($employee->job->name, ['controller' => 'Jobs', 'action' => 'view', $employee->job->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Date') ?></th>
            <td><?= h($employee->birth_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Joined') ?></th>
            <td><?= h($employee->date_joined) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Payrolls') ?></h4>
        <?php if (!empty($employee->payrolls)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Job') ?></th>
                <th scope="col"><?= __('Wage') ?></th>
                <th scope="col"><?= __('Hour') ?></th>
                <th scope="col"><?= __('Pay') ?></th>
                <th scope="col"><?= __('Month') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->payrolls as $payrolls): ?>
            <tr>
                <td><?= h($payrolls->id) ?></td>
                <td><?= h($payrolls->employee_id) ?></td>
                <td><?= h($payrolls->first_name) ?></td>
                <td><?= h($payrolls->last_name) ?></td>
                <td><?= h($payrolls->job) ?></td>
                <td><?= h($payrolls->wage) ?></td>
                <td><?= h($payrolls->hour) ?></td>
                <td><?= h($payrolls->pay) ?></td>
                <td><?= h($payrolls->month) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Payrolls', 'action' => 'view', $payrolls->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Payrolls', 'action' => 'edit', $payrolls->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payrolls', 'action' => 'delete', $payrolls->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payrolls->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Time Sheets') ?></h4>
        <?php if (!empty($employee->time_sheets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Month') ?></th>
                <th scope="col"><?= __('Hours') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->time_sheets as $timeSheets): ?>
            <tr>
                <td><?= h($timeSheets->id) ?></td>
                <td><?= h($timeSheets->employee_id) ?></td>
                <td><?= h($timeSheets->month) ?></td>
                <td><?= h($timeSheets->hours) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TimeSheets', 'action' => 'view', $timeSheets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TimeSheets', 'action' => 'edit', $timeSheets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TimeSheets', 'action' => 'delete', $timeSheets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timeSheets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
