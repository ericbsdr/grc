<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Primary Asset'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Secondary Assets'), ['controller' => 'SecondaryAssets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Secondary Asset'), ['controller' => 'SecondaryAssets', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Businessunits'), ['controller' => 'Businessunits', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Businessunit'), ['controller' => 'Businessunits', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="primaryAssets index large-9 medium-8 columns content">
    <h3><?= __('Primary Assets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owner') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('review') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($primaryAssets as $primaryAsset): ?>
            <tr>
                <td><?= $this->Number->format($primaryAsset->id) ?></td>
                <td><?= h($primaryAsset->name) ?></td>
                <td><?= h($primaryAsset->description) ?></td>
                <td><?= h($primaryAsset->owner) ?></td>
                <td><?= h($primaryAsset->status) ?></td>
                <td><?= h($primaryAsset->created) ?></td>
                <td><?= h($primaryAsset->modified) ?></td>
                <td><?= h($primaryAsset->review) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $primaryAsset->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $primaryAsset->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $primaryAsset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $primaryAsset->id)]) ?>
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
