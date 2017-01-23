<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Asset Classifications Asset'), ['action' => 'edit', $assetClassificationsAsset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Asset Classifications Asset'), ['action' => 'delete', $assetClassificationsAsset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetClassificationsAsset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Asset Classifications Assets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Classifications Asset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Asset Classifications'), ['controller' => 'AssetClassifications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Classification'), ['controller' => 'AssetClassifications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Primary Assets'), ['controller' => 'PrimaryAssets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Primary Asset'), ['controller' => 'PrimaryAssets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assetClassificationsAssets view large-9 medium-8 columns content">
    <h3><?= h($assetClassificationsAsset->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Asset Classification') ?></th>
            <td><?= $assetClassificationsAsset->has('asset_classification') ? $this->Html->link($assetClassificationsAsset->asset_classification->name, ['controller' => 'AssetClassifications', 'action' => 'view', $assetClassificationsAsset->asset_classification->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primary Asset') ?></th>
            <td><?= $assetClassificationsAsset->has('primary_asset') ? $this->Html->link($assetClassificationsAsset->primary_asset->name, ['controller' => 'PrimaryAssets', 'action' => 'view', $assetClassificationsAsset->primary_asset->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($assetClassificationsAsset->id) ?></td>
        </tr>
    </table>
</div>
