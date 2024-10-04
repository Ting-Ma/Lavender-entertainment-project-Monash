<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaymentType $paymentType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Payment Type'), ['action' => 'edit', $paymentType->type], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Payment Type'), ['action' => 'delete', $paymentType->type], ['confirm' => __('Are you sure you want to delete # {0}?', $paymentType->type), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Payment Type'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Payment Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="paymentType view content">
            <h3><?= h($paymentType->type) ?></h3>
            <table>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($paymentType->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($paymentType->description) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
