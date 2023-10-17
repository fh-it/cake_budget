<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vendor $vendor
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Vendor'), ['action' => 'edit', $vendor->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vendor'), ['action' => 'delete', $vendor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendor->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vendors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vendor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="vendors view content">
            <h3><?= h($vendor->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($vendor->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($vendor->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vendor->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= $this->Number->format($vendor->phone) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Invioces') ?></h4>
                <?php if (!empty($vendor->invioces)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Number') ?></th>
                            <th><?= __('Vendor Id') ?></th>
                            <th><?= __('Budget Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($vendor->invioces as $invioces) : ?>
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
