<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $businessunitsPrimaryAsset->primary_asset_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $businessunitsPrimaryAsset->primary_asset_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Businessunits Primary Assets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Primary Assets'), ['controller' => 'PrimaryAssets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Primary Asset'), ['controller' => 'PrimaryAssets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Businessunits'), ['controller' => 'Businessunits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Businessunit'), ['controller' => 'Businessunits', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="businessunitsPrimaryAssets form large-9 medium-8 columns content">
    <?= $this->Form->create($businessunitsPrimaryAsset) ?>
    <fieldset>
        <legend><?= __('Edit Businessunits Primary Asset') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
