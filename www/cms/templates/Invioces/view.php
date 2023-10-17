<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invioce $invioce
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Invioce'), ['action' => 'edit', $invioce->invoices_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Invioce'), ['action' => 'delete', $invioce->invoices_id], ['confirm' => __('Are you sure you want to delete # {0}?', $invioce->invoices_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Invioces'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Invioce'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="invioces view content">
            <h3><?= h($invioce->invoices_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($invioce->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number') ?></th>
                    <td><?= $this->Number->format($invioce->number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Vendor Id') ?></th>
                    <td><?= $this->Number->format($invioce->vendor_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Budget Id') ?></th>
                    <td><?= $this->Number->format($invioce->budget_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
