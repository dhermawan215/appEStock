<?= $this->extend('includes/app_main'); ?>

<?= $this->section('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
                <h4 class="font-weight-bold text-dark">Product Data Input</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 col-md-10 col-sm-6 grid-margin stretch-card">
                <div class="card mb-5">
                    <div class="card-body">
                        <h4 class="card-title">Form Input Products</h4>
                        <form action="<?= route_to('products.save') ?>" method="POST" class="forms-sample">
                            <?= csrf_field() ?>
                            <div class="form-group row mt-2">
                                <label for="batch_no" class="col-sm-3 col-form-label ">Batch No</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control  <?= ($validation->hasError('batch_no')) ? 'is-invalid' : ''; ?>" id="batch_no" name="batch_no" value="<?= old('batch_no') ?>" placeholder="batch_no">
                                    <div class="invalid-feedback mb-1">
                                        <?= $validation->getError('batch_no')  ?>
                                    </div>
                                </div>
                                <label for="product_name" class="col-sm-3 col-form-label ">Product Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control  <?= ($validation->hasError('product_name')) ? 'is-invalid' : ''; ?>" id="product_name" name="product_name" value="<?= old('product_name') ?>" placeholder="product_name">
                                    <div class="invalid-feedback mb-1">
                                        <?= $validation->getError('product_name')  ?>
                                    </div>
                                </div>
                                <label for="part_name" class="col-sm-3 col-form-label ">Part Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control  <?= ($validation->hasError('part_name')) ? 'is-invalid' : ''; ?>" id="part_name" name="part_name" value="<?= old('part_name') ?>" placeholder="part_name">
                                    <div class="invalid-feedback mb-1">
                                        <?= $validation->getError('part_name')  ?>
                                    </div>
                                </div>
                                <label for="part_number" class="col-sm-3 col-form-label ">Part Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control  <?= ($validation->hasError('part_number')) ? 'is-invalid' : ''; ?>" id="part_number" name="part_number" value="<?= old('part_number') ?>" placeholder="part_number">
                                    <div class="invalid-feedback mb-1">
                                        <?= $validation->getError('part_number')  ?>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="category" class="col-sm-3 col-form-label ">Category Products</label>
                                    <select name="category_id" id="category" class="form-control <?= ($validation->hasError('category_id')) ? 'is-invalid' : ''; ?>">
                                        <option selected>Select Data</option>
                                        <?php foreach ($dataCategory as $key => $value) : ?>
                                            <option value="<?= $value['id_category'] ?>"><?= $value['category_name'] ?> </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>



                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn btn-danger mr-2">Reset</button>
                                <a class="btn btn-light" href="<?= route_to('categories') ?>">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->


    <!-- partial -->
</div>

<?= $this->endSection(); ?>