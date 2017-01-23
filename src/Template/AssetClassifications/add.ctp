<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Asset Classifications'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Asset Classification Types'), ['controller' => 'AssetClassificationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset Classification Type'), ['controller' => 'AssetClassificationTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Asset Classifications Assets'), ['controller' => 'AssetClassificationsAssets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset Classifications Asset'), ['controller' => 'AssetClassificationsAssets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assetClassifications form large-9 medium-8 columns content">
    <?= $this->Form->create($assetClassification) ?>
    <fieldset>
        <legend><?= __('Add Asset Classification') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('criteria');
            echo $this->Form->input('asset_classification_type_id', ['options' => $assetClassificationTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
