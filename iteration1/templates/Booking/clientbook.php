<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */

$this->layout = 'login';
$this->assign('title', 'Create a Booking');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Booking</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* 自定义的CSS样式 */
        body {
            font-size: 1.5rem; /* 增大字体大小 */
        }
        .container {
            max-width: 90%; /* 增大容器宽度 */
        }
        .form-control {
            height: auto; /* 使输入框自适应内容 */
            padding: 0.75rem 1.25rem; /* 增大输入框的padding */
        }
        .btn {
            padding: 0.75rem 1.5rem; /* 增大按钮的padding */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8"> <!-- 修改为col-md-8使其更宽 -->
            <div class="card">
                <div class="card-header">Create a Booking</div>
                <div class="card-body">
                    <?= $this->Form->create($clientbook)?>
                    <?= $this->Flash->render() ?>
                    <fieldset>
                    <?php
                    echo $this->Form->control('date', [
                        'format' => 'yyyy-MM-ddTHH:mm',
                        'class' => 'form-control mb-3',
                        'label' => 'Start Time'
                    ]);
                    echo $this->Form->control('description', [
                        'require' => true,
                        'class' => 'form-control mb-3',
                        'maxlength' => 200
                    ]);
                    echo $this->Form->control('endtime', [
                        'format' => 'yyyy-MM-ddTHH:mm',
                        'class' => 'form-control mb-3',
                        'label' => 'End Time'
                    ]);
                    echo $this->Form->hidden('service_id', [
                        'class' => 'form-control mb-3'
                    ]);
                    echo $this->Form->hidden('venue_id', ['value' => $venueid]);
                    echo $this->Form->hidden('user_id', ['value' => $loggedIn->get('id')]);
                    echo $this->Form->hidden('payment_id', [
                        'class' => 'form-control mb-3'
                    ]);
                    ?>
                    </fieldset>
                    <div class="mb-3">Venue Name: <?= $name ?></div>
                    <div class="mb-3">Price: <?= $price ?></div>
                    <div class="mb-3">Services: <?= $service ?></div>
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



