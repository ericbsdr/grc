<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Asset Classification'), ['action' => 'edit', $assetClassification->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Asset Classification'), ['action' => 'delete', $assetClassification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetClassification->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Asset Classifications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Classification'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Asset Classification Types'), ['controller' => 'AssetClassificationTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Classification Type'), ['controller' => 'AssetClassificationTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Asset Classifications Assets'), ['controller' => 'AssetClassificationsAssets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Classifications Asset'), ['controller' => 'AssetClassificationsAssets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assetClassifications view large-9 medium-8 columns content">
    <h3><?= h($assetClassification->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($assetClassification->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Asset Classification Type') ?></th>
            <td><?= $assetClassification->has('asset_classification_type') ? $this->Html->link($assetClassification->asset_classification_type->name, ['controller' => 'AssetClassificationTypes', 'action' => 'view', $assetClassification->asset_classification_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($assetClassification->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($assetClassification->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($assetClassification->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Criteria') ?></h4>
        <?= $this->Text->autoParagraph(h($assetClassification->criteria)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Asset Classifications Assets') ?></h4>
        <?php if (!empty($assetClassification->asset_classifications_assets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Asset Classification Id') ?></th>
                <th scope="col"><?= __('Primary Asset Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($assetClassification->asset_classifications_assets as $assetClassificationsAssets): ?>
            <tr>
                <td><?= h($assetClassificationsAssets->id) ?></td>
                <td><?= h($assetClassificationsAssets->asset_classification_id) ?></td>
                <td><?= h($assetClassificationsAssets->primary_asset_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AssetClassificationsAssets', 'action' => 'view', $assetClassificationsAssets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AssetClassificationsAssets', 'action' => 'edit', $assetClassificationsAssets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AssetClassificationsAssets', 'action' => 'delete', $assetClassificationsAssets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetClassificationsAssets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
