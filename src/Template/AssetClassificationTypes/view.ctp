<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Asset Classification Type'), ['action' => 'edit', $assetClassificationType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Asset Classification Type'), ['action' => 'delete', $assetClassificationType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetClassificationType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Asset Classification Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Classification Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Asset Classifications'), ['controller' => 'AssetClassifications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset Classification'), ['controller' => 'AssetClassifications', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assetClassificationTypes view large-9 medium-8 columns content">
    <h3><?= h($assetClassificationType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($assetClassificationType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($assetClassificationType->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Asset Classifications') ?></h4>
        <?php if (!empty($assetClassificationType->asset_classifications)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Criteria') ?></th>
                <th scope="col"><?= __('Asset Classification Type Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($assetClassificationType->asset_classifications as $assetClassifications): ?>
            <tr>
                <td><?= h($assetClassifications->id) ?></td>
                <td><?= h($assetClassifications->name) ?></td>
                <td><?= h($assetClassifications->criteria) ?></td>
                <td><?= h($assetClassifications->asset_classification_type_id) ?></td>
                <td><?= h($assetClassifications->created) ?></td>
                <td><?= h($assetClassifications->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AssetClassifications', 'action' => 'view', $assetClassifications->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AssetClassifications', 'action' => 'edit', $assetClassifications->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AssetClassifications', 'action' => 'delete', $assetClassifications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetClassifications->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
