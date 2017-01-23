<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $primaryAssetClassificationsAsset->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $primaryAssetClassificationsAsset->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Primary Asset Classifications Assets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Asset Classifications'), ['controller' => 'AssetClassifications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset Classification'), ['controller' => 'AssetClassifications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Primary Assets'), ['controller' => 'PrimaryAssets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Primary Asset'), ['controller' => 'PrimaryAssets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="primaryAssetClassificationsAssets form large-9 medium-8 columns content">
    <?= $this->Form->create($primaryAssetClassificationsAsset) ?>
    <fieldset>
        <legend><?= __('Edit Primary Asset Classifications Asset') ?></legend>
        <?php
            echo $this->Form->input('asset_classification_id', ['options' => $assetClassifications]);
            echo $this->Form->input('primary_asset_id', ['options' => $primaryAssets]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
