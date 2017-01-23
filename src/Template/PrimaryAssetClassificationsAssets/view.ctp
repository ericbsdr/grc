<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Primary Asset Classifications Asset'), ['action' => 'edit', $primaryAssetClassificationsAsset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Primary Asset Classifications Asset'), ['action' => 'delete', $primaryAssetClassificationsAsset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $primaryAssetClassificationsAsset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Primary Asset Classifications Assets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Primary Asset Classifications Asset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Asset Classifications'), ['controller' => 'AssetClassifications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Classification'), ['controller' => 'AssetClassifications', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Primary Assets'), ['controller' => 'PrimaryAssets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Primary Asset'), ['controller' => 'PrimaryAssets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="primaryAssetClassificationsAssets view large-9 medium-8 columns content">
    <h3><?= h($primaryAssetClassificationsAsset->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Asset Classification') ?></th>
            <td><?= $primaryAssetClassificationsAsset->has('asset_classification') ? $this->Html->link($primaryAssetClassificationsAsset->asset_classification->name, ['controller' => 'AssetClassifications', 'action' => 'view', $primaryAssetClassificationsAsset->asset_classification->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primary Asset') ?></th>
            <td><?= $primaryAssetClassificationsAsset->has('primary_asset') ? $this->Html->link($primaryAssetClassificationsAsset->primary_asset->name, ['controller' => 'PrimaryAssets', 'action' => 'view', $primaryAssetClassificationsAsset->primary_asset->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($primaryAssetClassificationsAsset->id) ?></td>
        </tr>
    </table>
</div>
