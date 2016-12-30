<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Policies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Policy Statuses'), ['controller' => 'PolicyStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Policy Status'), ['controller' => 'PolicyStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Controls'), ['controller' => 'Controls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Control'), ['controller' => 'Controls', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="policies form large-9 medium-8 columns content">
    <?= $this->Form->create($policy) ?>
    <fieldset>
        <legend><?= __('Add Policy') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('policy_status_id', ['options' => $policyStatuses, 'empty' => true]);
            echo $this->Form->input('project_id', ['options' => $projects, 'empty' => true]);
            echo $this->Form->input('next_review_date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
