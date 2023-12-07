<!-- JS library -->
<script src="<?= base_url() ?>assets/js/jquery.js"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/appear.js"></script>
<script src="<?= base_url() ?>assets/js/owl.js"></script>
<script src="<?= base_url() ?>assets/js/wow.min.js"></script>
<script src="<?= base_url() ?>assets/js/pagenav.js"></script>
<script src="<?= base_url() ?>assets/js/odometer.js"></script>
<script src="<?= base_url() ?>assets/js/bxslider.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.barfiller.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.fancybox.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url() ?>assets/js/parallax-scroll.js"></script>
<script src="<?= base_url() ?>assets/js/aos.js"></script>
<script src="<?= base_url() ?>assets/js/slick.js"></script>
<script src="<?= base_url() ?>assets/js/typer-new.js"></script>
<script src="<?= base_url() ?>assets/js/side-demo.js"></script>
<script src="<?= base_url() ?>assets/plugin/owlcarousel/owlcarousel.js"></script>
<script src="<?= base_url() ?>assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>
    var openPhotoSwipe = function() {
        var pswpElement = document.querySelectorAll('.pswp')[0];

        // build items array
        var items = [{
                src: '<?= base_url() ?>assets/img/musik.JPG',
                w: 1080,
                h: 720
            },
            {
                src: '<?= base_url() ?>assets/img/award.PNG',
                w: 1080,
                h: 720
            },
            {

                src: '<?= base_url() ?>assets/img/award2.PNG',
                w: 353,
                h: 479
            },
            {

                src: '<?= base_url() ?>assets/img/mc.PNG',
                w: 353,
                h: 479
            },
            {

                src: '<?= base_url() ?>assets/img/pict.PNG',
                w: 353,
                h: 479
            },
            {

                src: '<?= base_url() ?>assets/img/prestasi.PNG',
                w: 1024,
                h: 683
            },
            {

                src: '<?= base_url() ?>assets/img/prestasi2.PNG',
                w: 1024,
                h: 683
            },
        ];

        // define options (if needed)
        var options = {
            // history & focus options are disabled on CodePen        
            history: false,
            focus: false,

            showAnimationDuration: 0,
            hideAnimationDuration: 0

        };

        var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };

    // openPhotoSwipe();

    document.getElementById('btn').onclick = openPhotoSwipe;
    document.getElementById('btn1').onclick = openPhotoSwipe;
    document.getElementById('btn2').onclick = openPhotoSwipe;
    document.getElementById('btn3').onclick = openPhotoSwipe;
    document.getElementById('btn4').onclick = openPhotoSwipe;
    document.getElementById('btn5').onclick = openPhotoSwipe;
    document.getElementById('btn6').onclick = openPhotoSwipe;
</script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            navigation: true, // Show next and prev buttons

            slideSpeed: 300,
            paginationSpeed: 400,

            items: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false
        });

    });
</script>

<script>
    function copyToClipboard() {

        let copyText = document.getElementById('baseUrl')

        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
        Swal.fire(
            'Berhasil!!!',
            'URL berhasil dicopy & ditambahkan ke papan klip!',
            'success'
        );

    }
</script>

</body>

</html>