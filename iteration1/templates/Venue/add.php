<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Venue $venue
 */
$this->layout = 'orginal';?>
<style>
    .venue-form-container {
        padding: 20px;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .venue-form-container h4 {
        margin-bottom: 20px;
    }

    .venue-form-container button {
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

    /* 新增的样式 */
    .venue-form-container label {
        display: block;
        margin-bottom: 5px;
    }

    .venue-form-container input[type="text"],
    .venue-form-container input[type="number"] {
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
            <?= $this->Html->link(__('List Venue'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="venue-form-container">
            <h4><?= __('Add Venue') ?></h4>
            <?= $this->Form->create($venue) ?>
            <fieldset>
                <?php
                // echo $this->Form->control('id', ['label' => 'Venue ID', 'placeholder' => 'Enter Venue ID']);
                echo $this->Form->control('name', ['label' => 'Venue Name', 'placeholder' => 'Enter Venue Name', 'required' => true]);
                echo $this->Form->control('street', ['label' => 'Street Address', 'placeholder' => 'Enter Street Address']);
                echo $this->Form->control('suburb', ['label' => 'Suburb', 'placeholder' => 'Enter Suburb']);
                echo $this->Form->control('postcode', ['label' => 'Postal Code', 'placeholder' => 'Enter Postal Code', 'type' => 'number']);
                echo $this->Form->control('facilities', ['label' => 'Facilities', 'placeholder' => 'Enter Facilities']);
                // echo $this->Form->control('booking_id', ['label' => 'Booking ID', 'placeholder' => 'Enter Booking ID']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
