<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $policyStatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $policyStatus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Policy Statuses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Policies'), ['controller' => 'Policies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Policy'), ['controller' => 'Policies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="policyStatuses form large-9 medium-8 columns content">
    <?= $this->Form->create($policyStatus) ?>
    <fieldset>
        <legend><?= __('Edit Policy Status') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
