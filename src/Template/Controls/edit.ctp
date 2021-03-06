<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $control->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $control->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Controls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Policies'), ['controller' => 'Policies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Policy'), ['controller' => 'Policies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Audit Dates'), ['controller' => 'AuditDates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Audit Date'), ['controller' => 'AuditDates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="controls form large-9 medium-8 columns content">
    <?= $this->Form->create($control) ?>
    <fieldset>
        <legend><?= __('Edit Control') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('status');
            echo $this->Form->input('policy_id', ['options' => $policies, 'empty' => true]);
            echo $this->Form->input('project_id');
            echo $this->Form->input('audit_metric_description');
            echo $this->Form->input('audit_success_crtieria');
            echo $this->Form->input('audit_dates_id', ['options' => $auditDates, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
