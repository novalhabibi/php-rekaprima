
    <script src="<?= base_url() ?>/assets/admin/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="<?= base_url() ?>/assets/admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="<?= base_url() ?>/assets/admin/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="<?= base_url() ?>/assets/admin/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="<?= base_url() ?>/assets/admin/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="<?= base_url() ?>/assets/admin/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="<?= base_url() ?>/assets/admin/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="<?= base_url() ?>/assets/admin/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="<?= base_url() ?>/assets/admin/assets/libs/js/dashboard-ecommerce.js"></script>

    <script>
    $('#form').parsley();
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>