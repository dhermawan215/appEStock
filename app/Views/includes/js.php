<!-- base:js -->
<script src="/backend/vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="/backend/js/off-canvas.js"></script>
<script src="/backend/js/hoverable-collapse.js"></script>
<script src="/backend/js/template.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="/backend/vendors/chart.js/Chart.min.js"></script>
<script src="/backend/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="/backend/js/dashboard.js"></script>
<!-- End custom js for this page-->

<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 4000);
    });
</script>