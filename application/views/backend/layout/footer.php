<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            ©
            <script>
                document.write(new Date().getFullYear());
            </script>
            , made with ❤️ by
            <a href="https://ardhacodes.com" target="_blank" class="footer-link fw-bolder">Ardhacodes</a>
        </div>
        <div>
            <!-- <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
            <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

            <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link me-4">Support</a> -->
        </div>
    </div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- <div class="buy-now">
    <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
</div> -->



<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url('assets/backend/') ?>vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url('assets/backend/') ?>vendor/libs/jquery/jquery-3.6.1.js"></script>

<!-- DROPIFY -->
<script src="<?= base_url('assets/backend/') ?>vendor/libs/dropify/js/dropify.js"></script>
<script>
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click to upload',
            'replace': 'Drag and drop or click to replace',
            'remove': 'Remove',
            'error': 'Ooops, something wrong happended.'
        }
    });
</script>
<script src="<?= base_url('assets/backend/') ?>vendor/libs/popper/popper.js"></script>
<script src="<?= base_url('assets/backend/') ?>vendor/js/bootstrap.js"></script>
<script src="<?= base_url('assets/backend/') ?>vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= base_url('assets/backend/') ?>vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url('assets/backend/') ?>vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?= base_url('assets/backend/') ?>js/main.js"></script>

<!-- CKEDITOR -->
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script> -->
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/decoupled-document/ckeditor.js"></script> -->
<!-- <script src="<?= base_url('assets/backend/') ?>vendor/libs/ckeditor/ckeditor.js"></script> -->

<!-- DATATABLES -->
<script src="<?= base_url('assets/backend/') ?>vendor/libs/datatables/bs5/jquery-3.5.1.js"></script>
<script src="<?= base_url('assets/backend/') ?>vendor/libs/datatables/bs5/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>vendor/libs/datatables/bs5/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>vendor/libs/datatables/bs5/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>vendor/libs/datatables/bs5/responsive.bootstrap5.min.js"></script>

<!-- SELECT2 -->
<script src="<?= base_url('assets/backend/') ?>vendor/libs/select2/js/select2.full.min.js"></script>

<!-- FLATPICKR -->
<script src="<?= base_url('assets/backend/') ?>vendor/libs/flatpickr/flatpickr.min.js"></script>

<!-- Page JS -->
<script src="<?= base_url('assets/backend/') ?>js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- 
<script>
    $(document).ready(function() {
        $('.dropify').dropify({
            messages: {
                'default': 'Drag and drop a file here or click to upload',
                'replace': 'Drag and drop or click to replace',
                'remove': 'Remove',
                'error': 'Ooops, something wrong happended.'
            }
        });
    });
</script> -->
<!-- <script>
    ClassicEditor
        .create(document.querySelector('.ckeditor'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor.config.height = 500; // 500 pixels high.
    ClassicEditor.config.height = '25em';
</script> -->
<!-- <script>
    DecoupledEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script> -->
<script>
    CKEDITOR.replace('.ckeditor');
</script>
<script>
    $(document).ready(function() {
        $('.datatables').DataTable();
        $('.select2').select2();
        $('.select2-multiple').select2();

        $(".flatpickr").flatpickr({
            dateFormat: "Y-m-d",
        });

        // $('.dropify').dropify();


        // $('.dropify').dropify({
        //     messages: {
        //         'default': 'Drag and drop a file here or click to upload',
        //         'replace': 'Drag and drop or click to replace',
        //         'remove': 'Remove',
        //         'error': 'Ooops, something wrong happended.'
        //     }
        // });
    });
</script>

</body>

</html>