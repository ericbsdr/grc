<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Audit Date'), ['action' => 'edit', $auditDate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Audit Date'), ['action' => 'delete', $auditDate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $auditDate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Audit Dates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Audit Date'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="auditDates view large-9 medium-8 columns content">
    <h3><?= h($auditDate->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($auditDate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($auditDate->date) ?></td>
        </tr>
    </table>
</div>
