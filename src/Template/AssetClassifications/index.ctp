<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Asset Classification'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Asset Classification Types'), ['controller' => 'AssetClassificationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset Classification Type'), ['controller' => 'AssetClassificationTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Asset Classifications Assets'), ['controller' => 'AssetClassificationsAssets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset Classifications Asset'), ['controller' => 'AssetClassificationsAssets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assetClassifications index large-9 medium-8 columns content">
    <h3><?= __('Asset Classifications') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('asset_classification_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($assetClassifications as $assetClassification): ?>
            <tr>
                <td><?= $this->Number->format($assetClassification->id) ?></td>
                <td><?= h($assetClassification->name) ?></td>
                <td><?= $assetClassification->has('asset_classification_type') ? $this->Html->link($assetClassification->asset_classification_type->name, ['controller' => 'AssetClassificationTypes', 'action' => 'view', $assetClassification->asset_classification_type->id]) : '' ?></td>
                <td><?= h($assetClassification->created) ?></td>
                <td><?= h($assetClassification->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $assetClassification->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assetClassification->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assetClassification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetClassification->id)]) ?>
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
