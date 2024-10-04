<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
$this->layout = 'orginal';?>
<style>
    .form-container {
        padding: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-container h4 {
        margin-bottom: 20px;
    }

    .form-container button {
        background-color: #007BFF;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .side-nav {
        margin-bottom: 20px;
    }

    .side-nav-item {
        display: block;
        padding: 10px;
        margin-bottom: 5px;
        background-color: #f8f8f8;
        border-radius: 5px;
        text-decoration: none;
    }

    .side-nav-item:hover {
        background-color: #e0e0e0;
    }

    .form-container label {
        display: block;
        margin-bottom: 5px;
    }

    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
    }

</style>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="form-container">
            <h4><?= __('Add User') ?></h4>
            <?= $this->Form->create($user) ?>
            <fieldset>
                <?php
                echo $this->Form->control('email', ['label' => 'Email', 'placeholder' => 'Enter Email Address', 'required' => true]);
                echo $this->Form->control('address', ['label' => 'Address', 'placeholder' => 'Enter Address']);
                echo $this->Form->control('fname', ['label' => 'First Name', 'placeholder' => 'Enter First Name', 'required' => true]);
                echo $this->Form->control('lname', ['label' => 'Last Name', 'placeholder' => 'Enter Last Name', 'required' => true]);
                echo $this->Form->control('password', ['label' => 'Password', 'placeholder' => 'Enter Password', 'required' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

