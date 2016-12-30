<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Assets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Businessunits'), ['controller' => 'Businessunits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Businessunit'), ['controller' => 'Businessunits', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assets form large-9 medium-8 columns content">
    <?= $this->Form->create($asset) ?>
    <fieldset>
        <legend><?= __('Add Asset') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('owner');
            echo $this->Form->input('status');
            echo $this->Form->input('review', ['empty' => true]);
            echo $this->Form->input('businessunits._ids', ['options' => $businessunits]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
