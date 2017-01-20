<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Secondary Asset'), ['action' => 'edit', $secondaryAsset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Secondary Asset'), ['action' => 'delete', $secondaryAsset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secondaryAsset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Secondary Assets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Secondary Asset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Primary Assets'), ['controller' => 'PrimaryAssets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Primary Asset'), ['controller' => 'PrimaryAssets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="secondaryAssets view large-9 medium-8 columns content">
    <h3><?= h($secondaryAsset->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($secondaryAsset->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($secondaryAsset->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner') ?></th>
            <td><?= h($secondaryAsset->owner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($secondaryAsset->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primary Asset') ?></th>
            <td><?= $secondaryAsset->has('primary_asset') ? $this->Html->link($secondaryAsset->primary_asset->name, ['controller' => 'PrimaryAssets', 'action' => 'view', $secondaryAsset->primary_asset->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($secondaryAsset->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($secondaryAsset->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($secondaryAsset->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Review') ?></th>
            <td><?= h($secondaryAsset->review) ?></td>
        </tr>
    </table>
</div>
