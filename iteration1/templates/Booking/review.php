
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
            background-color: #f8f9fa;
        }

        .page-section {
            padding: 60px 0;
        }

        table {
            width: 100%;
            margin-top: 30px;
        }
    </style>

</head>

<body id="page-top">
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-heading text-uppercase text-center">Booking Details</div>
    </div>
</header>

<section class="page-section bg-light" id="venue">
    <div class="container">
        <div class="text-center">
            <h2 class="section-subheading text-muted">Your Booking Detail</h2>
            <table class="table table-bordered table-striped">
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= $review['description'] ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $review['id'] ?></td>
                </tr>
                <tr>
                    <th><?= __('Venue Id') ?></th>
                    <td><?= $review['venue_id'] ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= $review['user_id'] ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Time') ?></th>
                    <td><?= $review['date'] ?></td>
                </tr>
                <tr>
                    <th><?= __('End Time') ?></th>
                    <td><?= $review['endtime'] ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $review['price'] ?></td>
                </tr>
                <tr>
                    <th><?= __('Service') ?></th>
                    <td><?= $review['service'] ?></td>
                </tr>
            </table>
        </div>
    </div>
</section>
</body>

</html>
<!-- ... (之前的代码) ... -->

<!-- ... (之前的代码) ... -->

<div class="text-center">
    <h2 class="section-subheading text-muted">Your Booking Detail</h2>
    <table class="table table-bordered table-striped">
        <!-- ... (表格内容) ... -->
    </table>

    <!-- Confirm and Cancel buttons -->
    <div class="mt-4">
        <button class="btn transparent-btn" onclick="confirmBooking(<?= $review['price'] ?>)">Confirm</button>
        <button class="btn transparent-btn" onclick="cancelBooking()">Cancel</button>
    </div>
</div>
</div>
</section>

<style>
    .transparent-btn {
        background-color: transparent;
        border: 2px solid #333; /* You can change this color if needed */
        color: #333; /* Button text color */
    }

    .transparent-btn:hover {
        background-color: rgba(51, 51, 51, 0.1); /* Slight background on hover */
        color: #333;
    }
</style>

<script>
    function confirmBooking(price) {


        window.location.href = "<?= $this->Url->build(['controller' => 'payment', 'action' => 'payment']) ?>/" + price;


    }
</script>

<script>
    function cancelBooking() {


        window.location.href = "<?= $this->Url->build(['controller' => 'venue', 'action' => 'venueListing']) ?>";
        
    }
</script>


</body>

</html>
