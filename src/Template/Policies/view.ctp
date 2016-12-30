<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Policy'), ['action' => 'edit', $policy->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Policy'), ['action' => 'delete', $policy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $policy->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Policies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Policy'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Policy Statuses'), ['controller' => 'PolicyStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Policy Status'), ['controller' => 'PolicyStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Controls'), ['controller' => 'Controls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Control'), ['controller' => 'Controls', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="policies view large-9 medium-8 columns content">
    <h3><?= h($policy->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($policy->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($policy->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Policy Status') ?></th>
            <td><?= $policy->has('policy_status') ? $this->Html->link($policy->policy_status->name, ['controller' => 'PolicyStatuses', 'action' => 'view', $policy->policy_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $policy->has('project') ? $this->Html->link($policy->project->name, ['controller' => 'Projects', 'action' => 'view', $policy->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($policy->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Next Review Date') ?></th>
            <td><?= h($policy->next_review_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($policy->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($policy->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Controls') ?></h4>
        <?php if (!empty($policy->controls)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Policy Id') ?></th>
                <th scope="col"><?= __('Audit Metric Description') ?></th>
                <th scope="col"><?= __('Audit Success Crtieria') ?></th>
                <th scope="col"><?= __('Audit Dates Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($policy->controls as $controls): ?>
            <tr>
                <td><?= h($controls->id) ?></td>
                <td><?= h($controls->name) ?></td>
                <td><?= h($controls->description) ?></td>
                <td><?= h($controls->status) ?></td>
                <td><?= h($controls->policy_id) ?></td>
                <td><?= h($controls->audit_metric_description) ?></td>
                <td><?= h($controls->audit_success_crtieria) ?></td>
                <td><?= h($controls->audit_dates_id) ?></td>
                <td><?= h($controls->created) ?></td>
                <td><?= h($controls->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Controls', 'action' => 'view', $controls->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Controls', 'action' => 'edit', $controls->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Controls', 'action' => 'delete', $controls->id], ['confirm' => __('Are you sure you want to delete # {0}?', $controls->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
