		
  <!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <?= $this->Html->meta('icon') ?>

        <title><?= $this->fetch('title') ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS (includes Bootstrap)--> 
        <?= $this->Html->css('styles.css') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>

        <style>
        .logo {
            width: 300px; /* Adjust this value to your desired width */
            height: auto; /* This will maintain the aspect ratio */
        }
        </style>
        
    </head>
    <body id="page-top">
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                
                <div class="masthead-heading text-uppercase">Your request is sent</div>
                
            </div>



