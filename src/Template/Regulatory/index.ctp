<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Regulatory'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="regulatory index large-9 medium-8 columns content">
    <h3><?= __('Regulatory') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('risk_magnifier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($regulatory as $regulatory): ?>
            <tr>
                <td><?= $this->Number->format($regulatory->id) ?></td>
                <td><?= h($regulatory->name) ?></td>
                <td><?= $this->Number->format($regulatory->risk_magnifier) ?></td>
                <td><?= h($regulatory->created) ?></td>
                <td><?= h($regulatory->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $regulatory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $regulatory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $regulatory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regulatory->id)]) ?>
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
