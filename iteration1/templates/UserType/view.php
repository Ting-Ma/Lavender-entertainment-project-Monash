<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserType $userType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User Type'), ['action' => 'edit', $userType->type], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User Type'), ['action' => 'delete', $userType->type], ['confirm' => __('Are you sure you want to delete # {0}?', $userType->type), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List User Type'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="userType view content">
            <h3><?= h($userType->type) ?></h3>
            <table>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($userType->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($userType->description) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
