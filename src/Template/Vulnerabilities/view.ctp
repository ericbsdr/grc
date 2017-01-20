<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vulnerability'), ['action' => 'edit', $vulnerability->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vulnerability'), ['action' => 'delete', $vulnerability->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vulnerability->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vulnerabilities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vulnerability'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vulnerabilities view large-9 medium-8 columns content">
    <h3><?= h($vulnerability->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($vulnerability->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vulnerability->id) ?></td>
        </tr>
    </table>
</div>
