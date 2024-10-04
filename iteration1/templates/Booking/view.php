<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
$this->layout = 'orginal';?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Booking'), ['action' => 'edit', $booking->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Booking'), ['action' => 'delete', $booking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Booking'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Booking'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="booking view content">
            <h3><?= h($booking->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($booking->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($booking->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Id') ?></th>
                    <td><?= $booking->service_id === null ? '' : $this->Number->format($booking->service_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Id') ?></th>
                    <td><?= $booking->venue_id === null ? '' : $this->Number->format($booking->venue_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= $booking->user_id === null ? '' : $this->Number->format($booking->user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment Id') ?></th>
                    <td><?= $booking->payment_id === null ? '' : $this->Number->format($booking->payment_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Time') ?></th>
                    <td><?= h($booking->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Time') ?></th>
                    <td><?= h($booking->endtime) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
