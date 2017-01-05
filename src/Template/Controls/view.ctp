<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Control'), ['action' => 'edit', $control->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Control'), ['action' => 'delete', $control->id], ['confirm' => __('Are you sure you want to delete # {0}?', $control->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Controls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Control'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Policies'), ['controller' => 'Policies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Policy'), ['controller' => 'Policies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Audit Dates'), ['controller' => 'AuditDates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Audit Date'), ['controller' => 'AuditDates', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="controls view large-9 medium-8 columns content">
    <h3><?= h($control->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($control->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($control->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($control->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Policy') ?></th>
            <td><?= $control->has('policy') ? $this->Html->link($control->policy->name, ['controller' => 'Policies', 'action' => 'view', $control->policy->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Audit Metric Description') ?></th>
            <td><?= h($control->audit_metric_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Audit Success Crtieria') ?></th>
            <td><?= h($control->audit_success_crtieria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Audit Date') ?></th>
            <td><?= $control->has('audit_date') ? $this->Html->link($control->audit_date->id, ['controller' => 'AuditDates', 'action' => 'view', $control->audit_date->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($control->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project Id') ?></th>
            <td><?= $this->Number->format($control->project_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($control->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($control->modified) ?></td>
        </tr>
    </table>
</div>
