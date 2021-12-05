<div class="row">

    <div class="col-md-12">
        <?php if (session()->getFlashdata('success')) : ?>
            <div style="background-color: #42f58d;" class="alert" role="alert">
                <h4 class="alert-heading font-weight-bold text-white">Successfully </h4>
                <p class="text-white"><?= session()->getFlashdata('success'); ?></p>
                <hr>

            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('warning')) : ?>
            <div style="background-color: salmon;" class="alert" role="alert">
                <h4 class="alert-heading font-weight-bold text-white">Well done!</h4>
                <p class="text-white"><?= session()->getFlashdata('warning'); ?></p>
                <hr>

            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('danger')) : ?>
            <div style="background-color: saddlebrown;" class="alert" role="alert">
                <h4 class="alert-heading font-weight-bold text-white">Well done!</h4>
                <p class="text-white"><?= session()->getFlashdata('danger'); ?></p>
                <hr>

            </div>
        <?php endif; ?>
    </div>
</div>