<?= $this->extend('includes/app_main'); ?>

<?= $this->section('content'); ?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12 mb-4 mb-xl-0">
                <h4 class="font-weight-bold text-dark">Hi <span class="text-weight-500 text-primary"> Admin</span>, welcome back!</h4>
                <p class="font-weight-normal mb-2 text-muted"><span><?= date('d - M - Y') ?></span></p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-xl-3 flex-column d-flex grid-margin stretch-card">
                <div class="row flex-grow">
                    <div class="col-sm-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Customers</h4>
                                <p>23% increase in conversion</p>
                                <h4 class="text-dark font-weight-bold mb-2">43,981</h4>
                                <canvas id="customers"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Orders</h4>
                                <p>6% decrease in earnings</p>
                                <h4 class="text-dark font-weight-bold mb-2">55,543</h4>
                                <canvas id="orders"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 d-flex grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Website Audience Metrics</h4>
                        <div class="row">
                            <div class="col-lg-5">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit amet cumque cupiditate</p>
                            </div>
                            <div class="col-lg-7">
                                <div class="chart-legends d-lg-block d-none" id="chart-legends"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <canvas id="web-audience-metrics-satacked" class="mt-3"></canvas>
                            </div>
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