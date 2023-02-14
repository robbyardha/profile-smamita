<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
</div>



<!-- EXAMPLE -->
<div class="main">
    <h1>Fasilitas</h1>
    <ul class="cards">
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="https://picsum.photos/500/300/?image=10"></div>
                <div class="card_content">
                    <h2 class="card_title">Card Grid Layout</h2>
                    <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                    <button class="btn card_btn">Read More</button>
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
                <div class="card_content">
                    <h2 class="card_title">Card Grid Layout</h2>
                    <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                    <button class="btn card_btn">Read More</button>
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="https://picsum.photos/500/300/?image=11"></div>
                <div class="card_content">
                    <h2 class="card_title">Card Grid Layout</h2>
                    <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                    <button class="btn card_btn">Read More</button>
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="https://picsum.photos/500/300/?image=14"></div>
                <div class="card_content">
                    <h2 class="card_title">Card Grid Layout</h2>
                    <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                    <button class="btn card_btn">Read More</button>
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="https://picsum.photos/500/300/?image=17"></div>
                <div class="card_content">
                    <h2 class="card_title">Card Grid Layout</h2>
                    <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                    <button class="btn card_btn">Read More</button>
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
                <div class="card_content">
                    <h2 class="card_title">Card Grid Layout</h2>
                    <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                    <button class="btn card_btn">Read More</button>
                </div>
            </div>
        </li>
    </ul>
</div>

<h3 class="made_by">Made with ♡</h3>
<style>
    /* Font */
    /* @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700'); */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

    /* Design */
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    html {
        background-color: #ecf9ff;
    }

    body {
        color: #272727;
        /* font-family: 'Poppins', serif; */
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        letter-spacing: 0;
        padding: 1rem;
    }

    .main {
        max-width: 1200px;
        margin: 0 auto;
    }

    h1 {
        font-size: 24px;
        font-weight: bold;
        text-align: center;

    }

    img {
        height: auto;
        max-width: 100%;
        vertical-align: middle;
    }

    .btn {
        color: #ffffff;
        padding: 0.8rem;
        font-size: 14px;
        text-transform: uppercase;
        border-radius: 4px;
        font-weight: 400;
        display: block;
        width: 100%;
        cursor: pointer;
        border: 1px solid rgba(255, 255, 255, 0.2);
        background: transparent;
    }

    .btn:hover {
        background-color: rgba(255, 255, 255, 0.12);
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cards_item {
        display: flex;
        padding: 1rem;
    }

    @media (min-width: 40rem) {
        .cards_item {
            width: 50%;
        }
    }

    @media (min-width: 56rem) {
        .cards_item {
            width: 33.3333%;
        }
    }

    .card {
        background-color: white;
        border-radius: 0.25rem;
        box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .card_content {
        padding: 1rem;
        /* background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%); */
        background: linear-gradient(#FF8B13 65%, #ECECEC 100%);
    }

    .card_title {
        color: #ffffff;
        font-size: 1.1rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: capitalize;
        margin: 0px;
    }

    .card_text {
        color: #ffffff;
        font-size: 0.875rem;
        line-height: 1.5;
        margin-bottom: 1.25rem;
        font-weight: 400;
    }

    .made_by {
        font-weight: 400;
        font-size: 13px;
        margin-top: 35px;
        text-align: center;
    }
</style>





<div class="container">
    <h3 class="text-center my-3">Fasilitas</h3>
    <div class="row d-flex align-content-center">
        <div class="col-4">
            <div class="card mr-2 ml-2 mt-2 mb-2" style="width: 18rem;">
                <img class="rounded img-fluid" src="<?= base_url('assets/img/fasilitas/lobby.jpg') ?>" alt=" SMAM1TA">
                <div class="card-body">
                    <h5 class="card-title">Lobby</h5>
                </div>
            </div>
            <div class="card mr-2 ml-2 mt-2 mb-2" style="width: 18rem;">
                <img class="rounded img-fluid" src="<?= base_url('assets/img/fasilitas/taman.jpg') ?>" alt=" SMAM1TA">
                <div class="card-body">
                    <h5 class="card-title">Taman</h5>
                </div>
            </div>
            <div class="card mr-2 ml-2 mt-2 mb-2" style="width: 18rem;">
                <img class="rounded img-fluid" src="<?= base_url('assets/img/fasilitas/masjid.jpg') ?>" alt=" SMAM1TA">
                <div class="card-body">
                    <h5 class="card-title">Masjid</h5>
                </div>
            </div>

        </div>

        <div class="col-4">
            <div class="card mr-2 ml-2 mt-2 mb-2" style="width: 18rem;">
                <img class="rounded img-fluid" src="<?= base_url('assets/img/fasilitas/perpus.jpg') ?>" alt=" SMAM1TA">
                <div class="card-body">
                    <h5 class="card-title">Perpustakaan</h5>
                </div>
            </div>
            <div class="card mr-2 ml-2 mt-2 mb-2" style="width: 18rem;">
                <img class="rounded img-fluid" src="<?= base_url('assets/img/fasilitas/uks.jpg') ?>" alt=" SMAM1TA">
                <div class="card-body">
                    <h5 class="card-title">UKS</h5>
                </div>
            </div>
            <div class="card mr-2 ml-2 mt-2 mb-2" style="width: 18rem;">
                <img class="rounded img-fluid" src="<?= base_url('assets/img/fasilitas/labkomp.jpg') ?>" alt=" SMAM1TA">
                <div class="card-body">
                    <h5 class="card-title">Lab Komputer</h5>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card mr-2 ml-2 mt-2 mb-2" style="width: 18rem;">
                <img class="rounded img-fluid" src="<?= base_url('assets/img/fasilitas/labkim.jpg') ?>" alt=" SMAM1TA">
                <div class="card-body">
                    <h5 class="card-title">Lab Kimia</h5>
                </div>
            </div>
            <div class="card mr-2 ml-2 mt-2 mb-2" style="width: 18rem;">
                <img class="rounded img-fluid" src="<?= base_url('assets/img/fasilitas/kelas.jpg') ?>" alt=" SMAM1TA">
                <div class="card-body">
                    <h5 class="card-title">Kelas</h5>
                </div>
            </div>

        </div>



    </div>

</div>
<!-- End of breadcurmb section
        ============================================= -->

<!-- Start of team section
        ============================================= -->
<section id="sa-team-inner" class="sa-team-inner-section inner-page-padding mt-4">
    <div class="container">
        <div class="sa-team-=inner-contenb">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="sa-team-inner-inner-box">
                        <div class="str-team-img-text position-relative">
                            <div class="str-team-img">
                                <!-- <img src="assets/img/startup/team/tm1.jpg" alt=""> -->
                            </div>

                            <!-- Root element of PhotoSwipe. Must have class pswp. -->
                            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                                <!-- Background of PhotoSwipe. 
         It's a separate element, as animating opacity is faster than rgba(). -->
                                <div class="pswp__bg"></div>

                                <!-- Slides wrapper with overflow:hidden. -->
                                <div class="pswp__scroll-wrap">

                                    <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                                    <div class="pswp__container">
                                        <!-- don't modify these 3 pswp__item elements, data is added later on -->
                                        <div class="pswp__item"></div>
                                        <div class="pswp__item"></div>
                                        <div class="pswp__item"></div>
                                    </div>

                                    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                    <div class="pswp__ui pswp__ui--hidden">

                                        <div class="pswp__top-bar">

                                            <!--  Controls are self-explanatory. Order can be changed. -->

                                            <div class="pswp__counter"></div>

                                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                                            <button class="pswp__button pswp__button--share" title="Share"></button>

                                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                            <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                                            <!-- element will get class pswp__preloader--active when preloader is running -->
                                            <div class="pswp__preloader">
                                                <div class="pswp__preloader__icn">
                                                    <div class="pswp__preloader__cut">
                                                        <div class="pswp__preloader__donut"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                            <div class="pswp__share-tooltip"></div>
                                        </div>

                                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                        </button>

                                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                        </button>

                                        <div class="pswp__caption">
                                            <div class="pswp__caption__center"></div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>