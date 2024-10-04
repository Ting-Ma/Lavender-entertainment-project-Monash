<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Booking> $booking
 */
$this->layout = 'admin';
?>
<style>
    .content {
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 5px;
    }

    .btn-primary {
        background-color: #007BFF;
        border-color: #007BFF;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .table-responsive {
        margin-top: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #e0e0e0;
    }

    th, td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tbody tr:hover {
        background-color: #f5f5f5;
    }

    .actions a {
        margin-right: 10px;
        text-decoration: none;
        color: #007BFF;
    }

    .actions a:hover {
        text-decoration: underline;
    }

    .paginator {
        margin-top: 20px;
    }

    .pagination {
        list-style-type: none;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination a {
        padding: 5px 10px;
        text-decoration: none;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        color: #007BFF;
    }

    .pagination a:hover {
        background-color: #e0e0e0;
    }

    .copyright {
        margin: 20px 0;
    }

    /* Button Styles */
    .d-none.d-sm-inline-block.btn.btn-sm.btn-primary.shadow-sm {
        font-size: 16px; /* Adjust font size */
        padding: 10px 20px; /* Adjust padding for size */
        color: #fff; /* Text color */
        background-color: #007BFF; /* Background color */
        border-color: #007BFF; /* Border color */
    }

    /* Heading Styles */
    .h3.mb-0.text-gray-800 {
        font-size: 24px; /* Adjust font size */
        color: #333; /* Adjust color */
    }
</style>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?= $this->Flash->render() ?>
<div class="booking index content">
    <!-- <?= $this->Html->link(__('New Booking'), ['action' => 'add'], ['class' => 'button float-right']) ?> -->
    <h3><?= __('Booking') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('endtime') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('service_id') ?></th>
                    <th><?= $this->Paginator->sort('venue_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('payment_id') ?></th>
                    
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($booking as $booking): ?>
                <tr>
                    <td><?= $this->Number->format($booking->id) ?></td>
                    <td><?= h($booking->date) ?></td>
                    <td><?= h($booking->endtime) ?></td>
                    <td><?= h($booking->description) ?></td>
                    <td><?= $booking->has('service') ? $this->Html->link($booking->service->id, ['controller' => 'Service', 'action' => 'view', $booking->service->id]) : '' ?></td>
                    <td><?= $booking->venue_id === null ? '' : $this->Number->format($booking->venue_id) ?></td>
                    <td><?= $booking->user_id === null ? '' : $this->Number->format($booking->user_id) ?></td>
                    <td><?= $booking->payment_id === null ? '' : $this->Number->format($booking->payment_id) ?></td>
                    
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $booking->id]) ?>
                       
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $booking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
</div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>
</html>

