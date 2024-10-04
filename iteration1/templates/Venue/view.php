<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 */
$this->layout = 'orginal';
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Venue'), ['action' => 'edit', $venue->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Venue'), ['action' => 'delete', $venue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venue->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Venue'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Venue'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venue view content">
            <h3><?= h($venue->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($venue->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street') ?></th>
                    <td><?= h($venue->street) ?></td>
                </tr>
                <tr>
                    <th><?= __('suburb') ?></th>
                    <td><?= h($venue->suburb) ?></td>
                </tr>
                <tr>
                    <th><?= __('postcode') ?></th>
                    <td><?= h($venue->postcode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Facilities') ?></th>
                    <td><?= h($venue->facilities) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($venue->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
