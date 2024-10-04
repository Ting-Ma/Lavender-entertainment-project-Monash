<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->layout = 'login';
$this->assign('title', 'Register new user');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register new user</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Register new user</div>
                <div class="card-body">
                    <?= $this->Form->create($user) ?>
                    <?= $this->Flash->render() ?>

                    <?= $this->Form->control('email', ['class' => 'form-control mb-3', 'required' => true]); ?>

                    <div class="form-row">
                        <?= $this->Form->control('fname', ['label'=>'First Name', 'class' => 'form-control mb-3 col']); ?>
                        <?= $this->Form->control('lname', ['label'=>'Last Name', 'class' => 'form-control mb-3 col']); ?>
                    </div>

                    <?= $this->Form->control('address', ['class' => 'form-control mb-3']); ?>

                    <div class="form-row">
                        <?= $this->Form->control('password', [
                            'value' => '',  // Ensure password is not sending back to the client side
                            'class' => 'form-control mb-3 col',
                            'maxlength' => 255
                        ]); ?>
                        <?= $this->Form->control('password_confirm', [
                            'type' => 'password',
                            'value' => '',  // Ensure password is not sending back to the client side
                            'label' => 'Retype Password',
                            'class' => 'form-control mb-3 col',
                            'maxlength' => 255
                        ]); ?>
                    </div>
                

                    <?= $this->Form->button('Register', ['class' => 'btn btn-primary']) ?>
                    <?= $this->Html->link('Back to login', ['controller' => 'Auth', 'action' => 'login'], ['class' => 'btn btn-link float-right']) ?>
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
