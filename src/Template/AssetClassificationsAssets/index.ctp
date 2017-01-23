<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Asset Classifications Asset'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Asset Classifications'), ['controller' => 'AssetClassifications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset Classification'), ['controller' => 'AssetClassifications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Primary Assets'), ['controller' => 'PrimaryAssets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Primary Asset'), ['controller' => 'PrimaryAssets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assetClassificationsAssets index large-9 medium-8 columns content">
    <h3><?= __('Asset Classifications Assets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('asset_classification_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('primary_asset_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($assetClassificationsAssets as $assetClassificationsAsset): ?>
            <tr>
                <td><?= $this->Number->format($assetClassificationsAsset->id) ?></td>
                <td><?= $assetClassificationsAsset->has('asset_classification') ? $this->Html->link($assetClassificationsAsset->asset_classification->name, ['controller' => 'AssetClassifications', 'action' => 'view', $assetClassificationsAsset->asset_classification->id]) : '' ?></td>
                <td><?= $assetClassificationsAsset->has('primary_asset') ? $this->Html->link($assetClassificationsAsset->primary_asset->name, ['controller' => 'PrimaryAssets', 'action' => 'view', $assetClassificationsAsset->primary_asset->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $assetClassificationsAsset->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assetClassificationsAsset->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assetClassificationsAsset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetClassificationsAsset->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
