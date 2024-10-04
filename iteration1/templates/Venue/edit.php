<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 */
$this->layout = 'orginal';?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $venue->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $venue->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Venue'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venue form content">
            <?= $this->Form->create($venue) ?>
            <fieldset>
                <legend><?= __('Edit Venue') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('street');
                    echo $this->Form->control('suburb');
                    echo $this->Form->control('postcode');
                    echo $this->Form->control('facilities');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
