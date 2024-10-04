<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Lavender Entertainment';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('fas fa-circle') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->css('styles.css') ?>
    <?= $this->fetch('script') ?>


</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="<?= $this->Url->build('/home') ?>"><?= $this->ContentBlock->image('logo'); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">

                <ul class="nav">

    <?php if ($loggedIn) : ?>
        <!-- User is logged in -->
        <!-- If user is admin -->
       <?php if($loggedIn['id'] === 1): ?>
        <li class="nav-item"><a class="nav-link" <?= $this->Html->link('Content Blocks', ['plugin' => 'ContentBlocks', 'controller' => 'ContentBlocks', 'action' => 'index']) ?></a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build('/venue/venueListing') ?>">Venues</a></li>

        <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build('/Auth/logout') ?>">Logout</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build('/admin') ?>">admin</a></li>
        <li class="nav-item"><span class="nav-link">Welcome, <?= h($loggedIn->get('email')) ?></span></li>
        <?php else: ?>
        <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build('/venue/venueListing') ?>">Venues</a></li>

        <li class="nav-item">
    <a class="nav-link" href="<?= $this->Url->build(['controller' => 'UserDashboard', 'action' => 'index', '?' => ['id' => $loggedIn['id']]]) ?>">Profile</a></li>

        <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build('/Auth/logout') ?>">Logout</a></li>
        <li class="nav-item"><span class="nav-link">Welcome, <?= h($loggedIn->get('email')) ?></span></li>
        <?php endif; ?>
    <?php else : ?>
        <!-- User is not logged in -->
        <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build('/venue/venueListing') ?>">Venues</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build('/') ?>#services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build('/') ?>#about">How-To</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build('/auth/login') ?>">Log In</a></li>
    <?php endif; ?>
</ul>



                </ul>
            </div>
        </div>
    </nav>


    <main class="main">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start"> <?= $this->ContentBlock->text('copyright-message'); ?></div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    <a class="link-dark text-decoration-none me-3"> <?= $this->ContentBlock->html('contact-us'); ?></a>
                </div>
            </div>
        </div>
    </footer>

    <?= $this->fetch('script') ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/venuescripts.js"></script>

</body>

</html>
