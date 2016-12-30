<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Control'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Audit Dates'), ['controller' => 'AuditDates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Audit Date'), ['controller' => 'AuditDates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="controls index large-9 medium-8 columns content">
    <h3><?= __('Controls') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('policy_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('audit_metric_description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('audit_success_crtieria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('audit_dates_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($controls as $control): ?>
            <tr>
                <td><?= $this->Number->format($control->id) ?></td>
                <td><?= h($control->name) ?></td>
                <td><?= h($control->description) ?></td>
                <td><?= h($control->status) ?></td>
                <td><?= $this->Number->format($control->policy_id) ?></td>
                <td><?= h($control->audit_metric_description) ?></td>
                <td><?= h($control->audit_success_crtieria) ?></td>
                <td><?= $control->has('audit_date') ? $this->Html->link($control->audit_date->id, ['controller' => 'AuditDates', 'action' => 'view', $control->audit_date->id]) : '' ?></td>
                <td><?= h($control->created) ?></td>
                <td><?= h($control->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $control->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $control->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $control->id], ['confirm' => __('Are you sure you want to delete # {0}?', $control->id)]) ?>
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
