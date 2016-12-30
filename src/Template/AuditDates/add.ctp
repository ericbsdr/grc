<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Audit Dates'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="auditDates form large-9 medium-8 columns content">
    <?= $this->Form->create($auditDate) ?>
    <fieldset>
        <legend><?= __('Add Audit Date') ?></legend>
        <?php
            echo $this->Form->input('date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
