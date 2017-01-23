<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $assetClassificationType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $assetClassificationType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Asset Classification Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Asset Classifications'), ['controller' => 'AssetClassifications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset Classification'), ['controller' => 'AssetClassifications', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assetClassificationTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($assetClassificationType) ?>
    <fieldset>
        <legend><?= __('Edit Asset Classification Type') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
