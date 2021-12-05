<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <title><?= $title ?></title>
    <?= $this->include('includes/style'); ?>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?= $this->include('includes/navbar'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?= $this->include('includes/sidebar'); ?>
            <!-- partial -->
            <?= $this->renderSection('content'); ?>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <?= $this->include('includes/js'); ?>
    <?= $this->renderSection('script'); ?>
</body>

</html>