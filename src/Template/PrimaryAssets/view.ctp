<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Primary Asset'), ['action' => 'edit', $primaryAsset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Primary Asset'), ['action' => 'delete', $primaryAsset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $primaryAsset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Primary Assets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Primary Asset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Secondary Assets'), ['controller' => 'SecondaryAssets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Secondary Asset'), ['controller' => 'SecondaryAssets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Businessunits'), ['controller' => 'Businessunits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Businessunit'), ['controller' => 'Businessunits', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="primaryAssets view large-9 medium-8 columns content">
    <h3><?= h($primaryAsset->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($primaryAsset->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($primaryAsset->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner') ?></th>
            <td><?= h($primaryAsset->owner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($primaryAsset->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($primaryAsset->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($primaryAsset->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($primaryAsset->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Review') ?></th>
            <td><?= h($primaryAsset->review) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Secondary Assets') ?></h4>
        <?php if (!empty($primaryAsset->secondary_assets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Owner') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Primary Asset Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Review') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($primaryAsset->secondary_assets as $secondaryAssets): ?>
            <tr>
                <td><?= h($secondaryAssets->id) ?></td>
                <td><?= h($secondaryAssets->name) ?></td>
                <td><?= h($secondaryAssets->description) ?></td>
                <td><?= h($secondaryAssets->owner) ?></td>
                <td><?= h($secondaryAssets->status) ?></td>
                <td><?= h($secondaryAssets->primary_asset_id) ?></td>
                <td><?= h($secondaryAssets->created) ?></td>
                <td><?= h($secondaryAssets->modified) ?></td>
                <td><?= h($secondaryAssets->review) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SecondaryAssets', 'action' => 'view', $secondaryAssets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SecondaryAssets', 'action' => 'edit', $secondaryAssets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SecondaryAssets', 'action' => 'delete', $secondaryAssets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secondaryAssets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Businessunits') ?></h4>
        <?php if (!empty($primaryAsset->businessunits)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Owner') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($primaryAsset->businessunits as $businessunits): ?>
            <tr>
                <td><?= h($businessunits->id) ?></td>
                <td><?= h($businessunits->description) ?></td>
                <td><?= h($businessunits->owner) ?></td>
                <td><?= h($businessunits->created) ?></td>
                <td><?= h($businessunits->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Businessunits', 'action' => 'view', $businessunits->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Businessunits', 'action' => 'edit', $businessunits->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Businessunits', 'action' => 'delete', $businessunits->id], ['confirm' => __('Are you sure you want to delete # {0}?', $businessunits->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
