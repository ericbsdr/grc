<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $primaryAsset->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $primaryAsset->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Primary Assets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Secondary Assets'), ['controller' => 'SecondaryAssets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Secondary Asset'), ['controller' => 'SecondaryAssets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Businessunits'), ['controller' => 'Businessunits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Businessunit'), ['controller' => 'Businessunits', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="primaryAssets form large-9 medium-8 columns content">
    <?= $this->Form->create($primaryAsset) ?>
    <fieldset>
        <legend><?= __('Edit Primary Asset') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('owner');
            echo $this->Form->input('status');
            echo $this->Form->input('review', ['empty' => true]);
            echo $this->Form->input('businessunits._ids', ['options' => $businessunits]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
