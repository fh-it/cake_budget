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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $position->positions_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $position->positions_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Positions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="positions form content">
            <?= $this->Form->create($position) ?>
            <fieldset>
                <legend><?= __('Edit Position') ?></legend>
                <?php
                    echo $this->Form->control('id');
                    echo $this->Form->control('description');
                    echo $this->Form->control('price');
                    echo $this->Form->control('quantity');
                    echo $this->Form->control('invoices_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
