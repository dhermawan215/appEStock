<?= $this->extend('includes/app_main'); ?>

<?= $this->section('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
                <h4 class="font-weight-bold text-dark">Category Dashboard</h4>
            </div>
        </div>
        <?= $this->include('includes/alert'); ?>
        <div class="row mt-2">
            <div class="col-lg-12 col-md-10 col-sm-6 stretch-card grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Category Form Input</div>
                        <div class="row">
                            <div class="d-flex col-md-12 p-2 mx-2">
                                <div class="col-md-3">
                                    <a href="<?= route_to('categoriesForm') ?>" class="btn btn-info">Input Category</a>
                                </div>
                                <div class="col-md-3">
                                    <a href="<?= route_to('categories.pdf') ?>" class="btn btn-info">Export PDF</a>
                                </div>
                                <div class="col-md-3">
                                    <a href="<?= route_to('categories.xls') ?>" class="btn btn-info">Export Excel</a>
                                </div>
                                <div class="col-md-3">
                                    <a href="<?= route_to('categories.csv') ?>" class="btn btn-info">Export CSV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 col-md-10 col-sm-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Categories table</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 2px;">No</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1 ?>
                                    <?php foreach ($data as $key => $value) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value['category_name'] ?></td>
                                            <td class="d-flex">
                                                <?php $id = bin2hex($encrypter->encrypt($value['id_category'])) ?>
                                                <a href="/categories/edit/<?= $id ?>" class="btn btn-warning btn-rounded mr-2">Edit</a>
                                                <!-- <button class="btn btn-warning btn-rounded mr-2" onclick="edit('<?= $value['id_category'] ?>')">Edit</button> -->
                                                <form action="/categories/delete/<?= $value['id_category'] ?>" method="POST" class="d-inline">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-rounded" onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <?= $this->include('includes/footer'); ?>

    <!-- partial -->
</div>

<?= $this->endSection(); ?>