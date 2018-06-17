<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TimeSheet[]|\Cake\Collection\CollectionInterface $timeSheets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Time Sheet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="timeSheets index large-9 medium-8 columns content">
    <h3><?= __('Time Sheets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employee_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hours') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($timeSheets as $timeSheet): ?>
            <tr>
                <td><?= $this->Number->format($timeSheet->id) ?></td>
                <td><?= $timeSheet->has('employee') ? $this->Html->link($timeSheet->employee->id, ['controller' => 'Employees', 'action' => 'view', $timeSheet->employee->id]) : '' ?></td>
                <td><?= h($timeSheet->month) ?></td>
                <td><?= $this->Number->format($timeSheet->hours) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $timeSheet->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $timeSheet->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $timeSheet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timeSheet->id)]) ?>
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
