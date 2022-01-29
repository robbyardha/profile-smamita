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
<script src="<?= base_url() ?>assets/js/script.js"></script>



<script>
    var openPhotoSwipe = function() {
        var pswpElement = document.querySelectorAll('.pswp')[0];

        // build items array
        var items = [{
                src: 'https://source.unsplash.com/daily?nature',
                w: 964,
                h: 1024
            },
            {
                src: 'https://farm7.staticflickr.com/6175/6176698785_7dee72237e_b.jpg',
                w: 1024,
                h: 683
            },
            {

                src: 'https://farm2.staticflickr.com/1043/5186867718_06b2e9e551_b.jpg',
                w: 1024,
                h: 683
            }
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
</script>

</body>

</html>