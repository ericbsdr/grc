<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $businessunit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $businessunit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Businessunits'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Primary Assets'), ['controller' => 'PrimaryAssets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Primary Asset'), ['controller' => 'PrimaryAssets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="businessunits form large-9 medium-8 columns content">
    <?= $this->Form->create($businessunit) ?>
    <fieldset>
        <legend><?= __('Edit Businessunit') ?></legend>
        <?php
            echo $this->Form->input('description');
            echo $this->Form->input('owner');
            echo $this->Form->input('primary_assets._ids', ['options' => $primaryAssets]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
