<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $secondaryAsset->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $secondaryAsset->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Secondary Assets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Primary Assets'), ['controller' => 'PrimaryAssets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Primary Asset'), ['controller' => 'PrimaryAssets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="secondaryAssets form large-9 medium-8 columns content">
    <?= $this->Form->create($secondaryAsset) ?>
    <fieldset>
        <legend><?= __('Edit Secondary Asset') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('owner');
            echo $this->Form->input('status');
            echo $this->Form->input('primary_asset_id', ['options' => $primaryAssets]);
            echo $this->Form->input('review', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
