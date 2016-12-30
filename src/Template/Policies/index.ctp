<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Policy'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Policy Statuses'), ['controller' => 'PolicyStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Policy Status'), ['controller' => 'PolicyStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Controls'), ['controller' => 'Controls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Control'), ['controller' => 'Controls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="policies index large-9 medium-8 columns content">
    <h3><?= __('Policies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('policy_status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('next_review_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($policies as $policy): ?>
            <tr>
                <td><?= $this->Number->format($policy->id) ?></td>
                <td><?= h($policy->name) ?></td>
                <td><?= h($policy->description) ?></td>
                <td><?= $policy->has('policy_status') ? $this->Html->link($policy->policy_status->name, ['controller' => 'PolicyStatuses', 'action' => 'view', $policy->policy_status->id]) : '' ?></td>
                <td><?= $policy->has('project') ? $this->Html->link($policy->project->name, ['controller' => 'Projects', 'action' => 'view', $policy->project->id]) : '' ?></td>
                <td><?= h($policy->next_review_date) ?></td>
                <td><?= h($policy->created) ?></td>
                <td><?= h($policy->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $policy->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $policy->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $policy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $policy->id)]) ?>
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
