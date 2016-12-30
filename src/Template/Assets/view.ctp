<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Asset'), ['action' => 'edit', $asset->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Asset'), ['action' => 'delete', $asset->id], ['confirm' => __('Are you sure you want to delete # {0}?', $asset->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Asset'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Businessunits'), ['controller' => 'Businessunits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Businessunit'), ['controller' => 'Businessunits', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assets view large-9 medium-8 columns content">
    <h3><?= h($asset->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($asset->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($asset->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner') ?></th>
            <td><?= h($asset->owner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($asset->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($asset->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($asset->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($asset->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Review') ?></th>
            <td><?= h($asset->review) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Businessunits') ?></h4>
        <?php if (!empty($asset->businessunits)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Asset Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Owner') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($asset->businessunits as $businessunits): ?>
            <tr>
                <td><?= h($businessunits->id) ?></td>
                <td><?= h($businessunits->asset_id) ?></td>
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
