<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $businessunit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $businessunit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Businessunits'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Assets'), ['controller' => 'Assets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset'), ['controller' => 'Assets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="businessunits form large-9 medium-8 columns content">
    <?= $this->Form->create($businessunit) ?>
    <fieldset>
        <legend><?= __('Edit Businessunit') ?></legend>
        <?php
            echo $this->Form->input('asset_id');
            echo $this->Form->input('description');
            echo $this->Form->input('owner');
            echo $this->Form->input('assets._ids', ['options' => $assets]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
