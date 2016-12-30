<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Project'), ['action' => 'edit', $project->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Project'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Policies'), ['controller' => 'Policies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Policy'), ['controller' => 'Policies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="projects view large-9 medium-8 columns content">
    <h3><?= h($project->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($project->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($project->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Policies') ?></h4>
        <?php if (!empty($project->policies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Policy Status Id') ?></th>
                <th scope="col"><?= __('Project Id') ?></th>
                <th scope="col"><?= __('Next Review Date') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($project->policies as $policies): ?>
            <tr>
                <td><?= h($policies->id) ?></td>
                <td><?= h($policies->name) ?></td>
                <td><?= h($policies->description) ?></td>
                <td><?= h($policies->policy_status_id) ?></td>
                <td><?= h($policies->project_id) ?></td>
                <td><?= h($policies->next_review_date) ?></td>
                <td><?= h($policies->created) ?></td>
                <td><?= h($policies->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Policies', 'action' => 'view', $policies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Policies', 'action' => 'edit', $policies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Policies', 'action' => 'delete', $policies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $policies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
