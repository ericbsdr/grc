<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Businessunits Primary Asset'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Primary Assets'), ['controller' => 'PrimaryAssets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Primary Asset'), ['controller' => 'PrimaryAssets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Businessunits'), ['controller' => 'Businessunits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Businessunit'), ['controller' => 'Businessunits', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="businessunitsPrimaryAssets index large-9 medium-8 columns content">
    <h3><?= __('Businessunits Primary Assets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('primary_asset_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('businessunit_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($businessunitsPrimaryAssets as $businessunitsPrimaryAsset): ?>
            <tr>
                <td><?= $businessunitsPrimaryAsset->has('primary_asset') ? $this->Html->link($businessunitsPrimaryAsset->primary_asset->name, ['controller' => 'PrimaryAssets', 'action' => 'view', $businessunitsPrimaryAsset->primary_asset->id]) : '' ?></td>
                <td><?= $businessunitsPrimaryAsset->has('businessunit') ? $this->Html->link($businessunitsPrimaryAsset->businessunit->id, ['controller' => 'Businessunits', 'action' => 'view', $businessunitsPrimaryAsset->businessunit->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $businessunitsPrimaryAsset->primary_asset_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $businessunitsPrimaryAsset->primary_asset_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $businessunitsPrimaryAsset->primary_asset_id], ['confirm' => __('Are you sure you want to delete # {0}?', $businessunitsPrimaryAsset->primary_asset_id)]) ?>
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
