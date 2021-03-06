<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Threat'), ['action' => 'edit', $threat->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Threat'), ['action' => 'delete', $threat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $threat->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Threats'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Threat'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="threats view large-9 medium-8 columns content">
    <h3><?= h($threat->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($threat->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($threat->id) ?></td>
        </tr>
    </table>
</div>
