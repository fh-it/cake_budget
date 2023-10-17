<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Position> $positions
 */
?>
<div class="positions index content">
    <?= $this->Html->link(__('New Position'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Positions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('quantity') ?></th>
                    <th><?= $this->Paginator->sort('invoices_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($positions as $position): ?>
                <tr>
                    <td><?= $this->Number->format($position->id) ?></td>
                    <td><?= h($position->description) ?></td>
                    <td><?= $this->Number->format($position->price) ?></td>
                    <td><?= $this->Number->format($position->quantity) ?></td>
                    <td><?= $this->Number->format($position->invoices_id) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $position->positions_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $position->positions_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $position->positions_id], ['confirm' => __('Are you sure you want to delete # {0}?', $position->positions_id)]) ?>
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
</div>
