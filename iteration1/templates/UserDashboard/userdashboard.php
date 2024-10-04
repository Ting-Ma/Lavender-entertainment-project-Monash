<?php
$this->layout = 'userdashboard';
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Your Bookings</h1>
            </div>

            <!-- Welcome Message -->
            <div class="alert alert-info" role="alert">
                Welcome back, <?= $email ?>! Here are your current bookings.
            </div>

            <!-- Bookings Table -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Date</th>
                        <th>Endtime</th>
                        <th>VenueName</th>
                        <th>Service</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- You can loop through the bookings here -->
                    <?php if ($lbook !== NULL): ?>
                        <tr>
                            <td><?= $lbook[0]['id'] ?></td>
                            <td><?= $lbook[0]['date'] ?></td>
                            <td><?= $lbook[0]['endtime'] ?></td>
                            <td><?= $lbook[0]['venue'] ?></td>
                            <td><?= $lbook[0]['service'] ?></td>
                            <td><?= $lbook[0]['price'] ?></td>
                        </tr>
                  <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <!-- Add New Booking Button -->
            <div class="mt-4">
                <?= $this->Html->link('Add New Booking', ['controller'=>'venue','action' => 'venueListing'], ['class' => 'btn btn-primary']) ?>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

