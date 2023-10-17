<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Budget> $budgets
 */
?>
<div class="budgets index content">
    <?= $this->Html->link(__('New Budget'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Budgets') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($budgets as $budget): ?>
                <tr>
                    <td><?= $this->Number->format($budget->id) ?></td>
                    <td><?= $this->Number->format($budget->total) ?></td>
                    <td><?= h($budget->name) ?></td>
                    <td><?= $budget->hasValue('user') ? $this->Html->link($budget->user->name, ['controller' => 'Users', 'action' => 'view', $budget->user->id]) : '' ?></td>
                    <td><?= h($budget->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $budget->budget_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $budget->budget_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $budget->budget_id], ['confirm' => __('Are you sure you want to delete # {0}?', $budget->budget_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
    <?php echo $this->Html->link(
        'Users',
        '/users',
        ['class' => 'button', 'target' => '_blank']
    );?>

    <?php echo $this->Html->link(
        'Invoices',
        '/invioces',
        ['class' => 'button', 'target' => '_blank']
    );?>

    <?php echo $this->Html->link(
        'Vendors',
        '/vendors',
        ['class' => 'button', 'target' => '_blank']
    );?>
</div>
