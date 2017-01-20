<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Secondary Asset'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Primary Assets'), ['controller' => 'PrimaryAssets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Primary Asset'), ['controller' => 'PrimaryAssets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="secondaryAssets index large-9 medium-8 columns content">
    <h3><?= __('Secondary Assets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owner') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('primary_asset_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('review') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($secondaryAssets as $secondaryAsset): ?>
            <tr>
                <td><?= $this->Number->format($secondaryAsset->id) ?></td>
                <td><?= h($secondaryAsset->name) ?></td>
                <td><?= h($secondaryAsset->description) ?></td>
                <td><?= h($secondaryAsset->owner) ?></td>
                <td><?= h($secondaryAsset->status) ?></td>
                <td><?= $secondaryAsset->has('primary_asset') ? $this->Html->link($secondaryAsset->primary_asset->name, ['controller' => 'PrimaryAssets', 'action' => 'view', $secondaryAsset->primary_asset->id]) : '' ?></td>
                <td><?= h($secondaryAsset->created) ?></td>
                <td><?= h($secondaryAsset->modified) ?></td>
                <td><?= h($secondaryAsset->review) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $secondaryAsset->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $secondaryAsset->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $secondaryAsset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $secondaryAsset->id)]) ?>
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
