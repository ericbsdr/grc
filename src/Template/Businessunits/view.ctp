<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Businessunit'), ['action' => 'edit', $businessunit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Businessunit'), ['action' => 'delete', $businessunit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $businessunit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Businessunits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Businessunit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Primary Assets'), ['controller' => 'PrimaryAssets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Primary Asset'), ['controller' => 'PrimaryAssets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="businessunits view large-9 medium-8 columns content">
    <h3><?= h($businessunit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($businessunit->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Owner') ?></th>
            <td><?= h($businessunit->owner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($businessunit->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($businessunit->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($businessunit->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Primary Assets') ?></h4>
        <?php if (!empty($businessunit->primary_assets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Owner') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Review') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($businessunit->primary_assets as $primaryAssets): ?>
            <tr>
                <td><?= h($primaryAssets->id) ?></td>
                <td><?= h($primaryAssets->name) ?></td>
                <td><?= h($primaryAssets->description) ?></td>
                <td><?= h($primaryAssets->owner) ?></td>
                <td><?= h($primaryAssets->status) ?></td>
                <td><?= h($primaryAssets->created) ?></td>
                <td><?= h($primaryAssets->modified) ?></td>
                <td><?= h($primaryAssets->review) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PrimaryAssets', 'action' => 'view', $primaryAssets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PrimaryAssets', 'action' => 'edit', $primaryAssets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PrimaryAssets', 'action' => 'delete', $primaryAssets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $primaryAssets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
