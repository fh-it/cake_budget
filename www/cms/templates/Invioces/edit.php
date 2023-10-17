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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $invioce->invoices_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $invioce->invoices_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Invioces'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="invioces form content">
            <?= $this->Form->create($invioce) ?>
            <fieldset>
                <legend><?= __('Edit Invioce') ?></legend>
                <?php
                    echo $this->Form->control('id');
                    echo $this->Form->control('number');
                    echo $this->Form->control('vendor_id');
                    echo $this->Form->control('budget_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
