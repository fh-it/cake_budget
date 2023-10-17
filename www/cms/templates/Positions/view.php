<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Position $position
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Position'), ['action' => 'edit', $position->positions_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Position'), ['action' => 'delete', $position->positions_id], ['confirm' => __('Are you sure you want to delete # {0}?', $position->positions_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Positions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Position'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="positions view content">
            <h3><?= h($position->positions_description) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($position->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($position->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($position->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantity') ?></th>
                    <td><?= $this->Number->format($position->quantity) ?></td>
                </tr>
                <tr>
                    <th><?= __('Invoices Id') ?></th>
                    <td><?= $this->Number->format($position->invoices_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
