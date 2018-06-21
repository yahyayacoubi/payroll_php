<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payroll[]|\Cake\Collection\CollectionInterface $payrolls
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Payroll'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="payrolls index large-9 medium-8 columns content">
    <h3><?= __('Payrolls') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('job') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($payrolls as $payroll): ?>
            <tr>
                <td><?= $this->Number->format($payroll->id) ?></td>
                <td><?= $payroll->has('employee') ? $this->Html->link($payroll->employee->id, ['controller' => 'Employees', 'action' => 'view', $payroll->employee->id]) : '' ?></td>
                <td><?= h($payroll->first_name) ?></td>
                <td><?= h($payroll->last_name) ?></td>
                <td><?= h($payroll->job) ?></td>
                <td><?= $this->Number->format($payroll->wage) ?></td>
                <td><?= $this->Number->format($payroll->hour) ?></td>
                <td><?= $this->Number->format($payroll->pay) ?></td>
                <td><?= h($payroll->month) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $payroll->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $payroll->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $payroll->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payroll->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
