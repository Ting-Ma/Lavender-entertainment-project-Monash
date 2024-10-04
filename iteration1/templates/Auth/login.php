<?php
/**
 * @var \App\View\AppView $this
 */

use Cake\Core\Configure;

$this->layout = 'login';
$this->assign('title', 'Login');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <?= $this->Form->create() ?>
                    <?= $this->Flash->render() ?>
                    <?php
                    echo $this->Form->control('email', [
                        'id' =>'email',
                        'type' => 'email',
                        'required' => true,
                        'value' => '',
                        'maxlength' => 100,
                        'class' => 'form-control mb-3',
                        'label' => 'Email Address'
                    ]);
                    echo $this->Form->control('password', [
                        'id'=>'password',
                        'type' => 'password',
                        'required' => true,
                        'value'=>'',
                        'maxlength' => 100,
                        'class' => 'form-control mb-3',
                        'label' => 'Password'
                    ]);
                    ?>
                    <?= $this->Form->button('Login', ['class' => 'btn btn-primary']) ?>
                    <?= $this->Html->link('Forgot password?', ['controller' => 'Auth', 'action' => 'forgetPassword'], ['class' => 'btn btn-link']) ?>
                    <?= $this->Form->end() ?>

                    <hr class="my-4">

                    <?= $this->Html->link('Register new user', ['controller' => 'Auth', 'action' => 'register'], ['class' => 'btn btn-link']) ?>
                    <?= $this->Html->link('Go to Homepage', '/home', ['class' => 'btn btn-link']) ?>
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


