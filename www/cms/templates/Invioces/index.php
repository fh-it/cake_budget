<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Invioce> $invioces
 */
?>
<div class="invioces index content">
    <?= $this->Html->link(__('New Invioce'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Invioces') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('number') ?></th>
                    <th><?= $this->Paginator->sort('vendor_id') ?></th>
                    <th><?= $this->Paginator->sort('budget_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($invioces as $invioce): ?>
                <tr>
                    <td><?= $this->Number->format($invioce->id) ?></td>
                    <td><?= $this->Number->format($invioce->number) ?></td>
                    <td><?= $this->Number->format($invioce->vendor_id) ?></td>
                    <td><?= $this->Number->format($invioce->budget_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $invioce->invoices_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $invioce->invoices_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $invioce->invoices_id], ['confirm' => __('Are you sure you want to delete # {0}?', $invioce->invoices_id)]) ?>
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
        'Budgets',
        '/budgets',
        ['class' => 'button', 'target' => '_blank']
    );?>

    <?php echo $this->Html->link(
        'Positions',
        '/positions',
        ['class' => 'button', 'target' => '_blank']
    );?>

    <?php echo $this->Html->link(
        'Users',
        '/users',
        ['class' => 'button', 'target' => '_blank']
    );?>
</div>
