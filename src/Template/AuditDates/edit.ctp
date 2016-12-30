<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $auditDate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $auditDate->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Audit Dates'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="auditDates form large-9 medium-8 columns content">
    <?= $this->Form->create($auditDate) ?>
    <fieldset>
        <legend><?= __('Edit Audit Date') ?></legend>
        <?php
            echo $this->Form->input('date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
