<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Service'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Service'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="service view content">
            <h3><?= h($service->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= h($service->company) ?></td>
                </tr>
                <tr>
                    <th><?= __('Service Type') ?></th>
                    <td><?= h($service->service_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact') ?></th>
                    <td><?= h($service->contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($service->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
