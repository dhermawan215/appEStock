<?= $this->extend('includes/app_main'); ?>

<?= $this->section('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
                <h4 class="font-weight-bold text-dark">Category Data Input</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 col-md-10 col-sm-6 grid-margin stretch-card">
                <div class="card mb-5">
                    <div class="card-body">
                        <h4 class="card-title">Form Input Categoris</h4>
                        <form action="/categories/save" method="POST" class="forms-sample">
                            <?= csrf_field() ?>
                            <div class="form-group row mt-2">
                                <label for="categoryname" class="col-sm-3 col-form-label ">Category Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control  <?= ($validation->hasError('category_name')) ? 'is-invalid' : ''; ?>" id="categoryname" name="category_name" value="<?= old('category_name') ?>" placeholder="category name">
                                    <div class="invalid-feedback mb-1">
                                        <?= $validation->getError('category_name')  ?>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
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