<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Budget $budget
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Budget'), ['action' => 'edit', $budget->budget_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Budget'), ['action' => 'delete', $budget->budget_id], ['confirm' => __('Are you sure you want to delete # {0}?', $budget->budget_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Budgets'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Budget'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="budgets view content">
            <h3><?= h($budget->budget_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($budget->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $budget->hasValue('user') ? $this->Html->link($budget->user->user_name, ['controller' => 'Users', 'action' => 'view', $budget->user->user_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($budget->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($budget->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($budget->total) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Invioces') ?></h4>
                <?php if (!empty($budget->invioces)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Number') ?></th>
                            <th><?= __('Vendor Id') ?></th>
                            <th><?= __('Budget Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($budget->invioces as $invioces) : ?>
                        <tr>
                            <td><?= h($invioces->id) ?></td>
                            <td><?= h($invioces->number) ?></td>
                            <td><?= h($invioces->vendor_id) ?></td>
                            <td><?= h($invioces->budget_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Invioces', 'action' => 'view', $invioces->invoices_id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Invioces', 'action' => 'edit', $invioces->invoices_id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Invioces', 'action' => 'delete', $invioces->invoices_id], ['confirm' => __('Are you sure you want to delete # {0}?', $invioces->invoices_id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
