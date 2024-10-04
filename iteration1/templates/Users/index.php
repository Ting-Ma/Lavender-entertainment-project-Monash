<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
$this->layout = 'admin';
?>
<style>
    .content {
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 5px;
    }

    .button {
        background-color: #007BFF;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        margin-bottom: 20px;
    }

    .btn-primary {
        background-color: #007BFF;
        border-color: #007BFF;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .button:hover {
        background-color: #0056b3;
    }

    .table-responsive {
        margin-top: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid #e0e0e0;
    }

    th,
    td {
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
        margin: 20px;
    }

    /* Button Styles */
    .d-none.d-sm-inline-block.btn.btn-sm.btn-primary.shadow-sm {
        font-size: 16px;
        /* Adjust font size */
        padding: 10px 20px;
        /* Adjust padding for size */
        color: #fff;
        /* Text color */
        background-color: #007BFF;
        /* Background color */
        border-color: #007BFF;
        /* Border color */
    }

    /* Heading Styles */
    .h3.mb-0.text-gray-800 {
        font-size: 24px;
        /* Adjust font size */
        color: #333;
        /* Adjust color */
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

                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"><?= __('User') ?></h1>
                            <a href="<?= $this->Url->Build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Add New User</a>
                        </div>

                        <?= $this->Form->create(null, ['type' => 'get']) ?>
                        <?= $this->Form->control('key', ['label' => 'Search', 'value' => $this->request->getQuery('key')]) ?>
                        <?= $this->Form->submit() ?>
                        <?= $this->Form->end() ?>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th><?= $this->Paginator->sort('id') ?></th>
                                        <th><?= $this->Paginator->sort('email') ?></th>
                                        <th><?= $this->Paginator->sort('address') ?></th>
                                        <th><?= $this->Paginator->sort('fname') ?></th>
                                        <th><?= $this->Paginator->sort('lname') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user) : ?>
                                        <tr>
                                            <td><?= $this->Number->format($user->id) ?></td>
                                            <td><?= h($user->email) ?></td>
                                            <td><?= h($user->address) ?></td>
                                            <td><?= h($user->fname) ?></td>
                                            <td><?= h($user->lname) ?></td>
                                            <td class="actions">
                                                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="paginator">
                            <ul class="pagination">
                                <?= $this->Paginator->first('<< ' . __('first')) ?>
                                <?= $this->Paginator->prev('< ' . __('previous')) ?>&nbsp;&nbsp;&nbsp;
                                <?= $this->Paginator->numbers() ?>&nbsp;
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


<!-- End of Page Wrapper -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>






