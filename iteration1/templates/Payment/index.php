<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Payment> $payment
 */
$this->layout = 'admin';
?>
<div class="payment index content">
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <h3><?= __('Payment') ?></h3>
        <?= $this->Html->link(__('New Payment'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('price') ?></th>
                <th><?= $this->Paginator->sort('date') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($payment as $payment): ?>
                <tr>
                    <td><?= $this->Number->format($payment->id) ?></td>
                    <td><?= $this->Number->format($payment->price) ?></td>
                    <td><?= h($payment->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('<i class="fa fa-eye"></i> ' . __('View'), ['action' => 'view', $payment->id], ['escape' => false]) ?>
                        <?= $this->Html->link('<i class="fa fa-edit"></i> ' . __('Edit'), ['action' => 'edit', $payment->id], ['escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="fa fa-trash"></i> ' . __('Delete'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id), 'escape' => false]) ?>
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

