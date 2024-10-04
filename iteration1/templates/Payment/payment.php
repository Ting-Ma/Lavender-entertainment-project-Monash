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
            width: 300px;
            height: auto;
        }

        .masthead {
            padding: 50px 0;
            background: linear-gradient(45deg, #f3ec78, #af4261);
            color: white;
        }

        .page-section {
            padding: 60px 0;
        }

        .payment-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .payment-card h3 {
            margin-bottom: 10px;
        }
    </style>

</head>

<body id="page-top">
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-heading text-uppercase text-center">Payment Details</div>
    </div>
</header>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... (Your existing head content) ... -->

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style>
        .payment-card {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        .payment-card h3 {
            margin-bottom: 20px;
        }

        .payment-icon {
            color: #007BFF;
            margin-right: 10px;
        }
    </style>
</head>

<body>

<!-- ... (Your existing content) ... -->

<section class="page-section bg-light" id="venue">
    <div class="container">
        <div class="text-center">
            <div class="payment-card">
            <h3 class="section-subheading text-muted">
                    </i>The total Price is: <?= $price ?>
                </h3>
                <h3 class="section-subheading text-muted">
                    <i class="fas fa-university payment-icon"></i>BSB 063-464
                </h3>
                <h3 class="section-subheading text-muted">
                    <i class="fas fa-credit-card payment-icon"></i>Bank account: 1103 5455
                </h3>
            </div>
        </div>
    </div>
</section>

</body>

</html>

