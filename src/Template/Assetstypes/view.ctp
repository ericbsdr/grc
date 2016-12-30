<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Assetstype'), ['action' => 'edit', $assetstype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Assetstype'), ['action' => 'delete', $assetstype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assetstype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assetstypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assetstype'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assetstypes view large-9 medium-8 columns content">
    <h3><?= h($assetstype->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($assetstype->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($assetstype->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($assetstype->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($assetstype->modified) ?></td>
        </tr>
    </table>
</div>
