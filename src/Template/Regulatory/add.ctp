<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Regulatory'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="regulatory form large-9 medium-8 columns content">
    <?= $this->Form->create($regulatory) ?>
    <fieldset>
        <legend><?= __('Add Regulatory') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('risk_magnifier');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
