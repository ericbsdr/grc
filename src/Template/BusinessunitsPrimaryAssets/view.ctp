<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Businessunits Primary Asset'), ['action' => 'edit', $businessunitsPrimaryAsset->primary_asset_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Businessunits Primary Asset'), ['action' => 'delete', $businessunitsPrimaryAsset->primary_asset_id], ['confirm' => __('Are you sure you want to delete # {0}?', $businessunitsPrimaryAsset->primary_asset_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Businessunits Primary Assets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Businessunits Primary Asset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Primary Assets'), ['controller' => 'PrimaryAssets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Primary Asset'), ['controller' => 'PrimaryAssets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Businessunits'), ['controller' => 'Businessunits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Businessunit'), ['controller' => 'Businessunits', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="businessunitsPrimaryAssets view large-9 medium-8 columns content">
    <h3><?= h($businessunitsPrimaryAsset->primary_asset_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Primary Asset') ?></th>
            <td><?= $businessunitsPrimaryAsset->has('primary_asset') ? $this->Html->link($businessunitsPrimaryAsset->primary_asset->name, ['controller' => 'PrimaryAssets', 'action' => 'view', $businessunitsPrimaryAsset->primary_asset->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Businessunit') ?></th>
            <td><?= $businessunitsPrimaryAsset->has('businessunit') ? $this->Html->link($businessunitsPrimaryAsset->businessunit->id, ['controller' => 'Businessunits', 'action' => 'view', $businessunitsPrimaryAsset->businessunit->id]) : '' ?></td>
        </tr>
    </table>
</div>
