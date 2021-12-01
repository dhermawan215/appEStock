<div class="row">

    <div class="col-md-12">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading text-center font-weight-bold text-white">Well done!</h4>
                <p class="text-white"><?= session()->getFlashdata('success'); ?></p>
                <hr>

            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('warning')) : ?>
            <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading text-center font-weight-bold text-white">Well done!</h4>
                <p class="text-white"><?= session()->getFlashdata('warning'); ?></p>
                <hr>

            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('danger')) : ?>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading text-center font-weight-bold text-white">Well done!</h4>
                <p class="text-white"><?= session()->getFlashdata('danger'); ?></p>
                <hr>

            </div>
        <?php endif; ?>
    </div>
</div>