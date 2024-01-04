<!-- Start of header section
    	============================================= -->


<!-- Start of Banner section
        ============================================= -->
<section id="home" class="appseo-banner-section position-relative">
    <div class="container">
        <div class="appseo-banner-content appseo-headline pera-content">
            <h2 class="cd-headline letters rotate-3">SMA Muhammadiyah 1 Taman
                <br>

            </h2>
            <p>The Excellent School</p>

            <div class="banner-btn">
                <div class="qut-btn appseo-btn-hover text-uppercase text-center">
                    <a href="#">Explore Now</a>
                </div>
                <div class="banner-video-btn text-center">
                    <a href="https://www.youtube.com/watch?v=Q3FG6lBs7v8" class="lightbox-image overlay-box"><i class="fas fa-play"></i></a>
                    <i class="video-border"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-shape appseo-banner-shape1"><img src="<?= base_url() ?>assets/img/seo/shape/bs1.png" alt=""></div>
    <div class="banner-shape appseo-banner-shape2" data-parallax='{"y" : 100, "rotateY":500}'><img src="<?= base_url() ?>assets/img/seo/shape/bs3.png" alt=""></div>
    <div class="banner-shape appseo-banner-shape3"><img src="<?= base_url() ?>assets/img/seo/shape/bs2.png" alt=""></div>
    <div class="banner-shape appseo-banner-shape4" data-parallax='{"x" : 100}'><img src="<?= base_url() ?>assets/img/seo/shape/bs4.png" alt=""></div>
    <div class="banner-shape appseo-banner-vector"><img src="<?= base_url() ?>assets/logo/vec_towersma.png" alt=""></div>
</section>
<!-- End of Banner section
        ============================================= -->


<!-- Start of Kepsek section
        ============================================= -->
<section id="president" class="appseo-about-section  position-relative">
    <div class="container">
        <div class="abou-area-content  position-relative">
            <div class="appseo-about-img wow fadeFromLeft " data-wow-delay="600ms" data-wow-duration="1500ms">
                <img src="<?= base_url('assets/backend/img/foto_direktur/') . $config_direktur['img_direktur'] ?>" class="mt-5 img-direktur" alt="">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="appseo-about-content wow fadeFromRight" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="appseo-section-title2 appseo-headline pera-content">
                            <p>President SMA Muhammadiyah 1 Taman</p>
                            <h3><?= $config_direktur['nama_direktur'] ?></h3>
                        </div>
                        <div class="appseo-about-quote">
                            <div class="quote-icon-about">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M120,77C53.832,77,0,130.832,0,197c0,31.641,12.208,61.497,34.374,84.069c21.458,21.851,49.904,34.501,80.375,35.812
                                            c0.144,1.904,0.251,4.528,0.251,8.119c0,14.712-11.188,59.665-18.241,84.544L89.542,435h87.584l5.867-9.453
                                            C185.32,421.797,240,332.148,240,197C240,130.832,186.168,77,120,77z M154.189,395h-12.13C147.806,372.416,155,340.959,155,325
                                            c0-12.664-0.94-22.838-5.531-31.33c-4.089-7.564-12.641-16.573-30.183-16.669l-0.873-0.022C75.176,276.141,40,240.263,40,197
                                            c0-44.112,35.888-80,80-80s80,35.888,80,80C200,296.32,167.164,369.834,154.189,395z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M392,77c-66.168,0-120,53.832-120,120c0,31.641,12.208,61.497,34.374,84.069c21.458,21.851,49.904,34.501,80.375,35.812
                                                c0.144,1.904,0.251,4.528,0.251,8.119c0,14.712-11.188,59.665-18.241,84.544L361.542,435h87.584l5.867-9.453
                                                C457.32,421.797,512,332.148,512,197C512,130.832,458.168,77,392,77z M426.189,395h-12.13C419.806,372.416,427,340.959,427,325
                                                c0-12.664-0.94-22.838-5.531-31.33c-4.089-7.564-12.641-16.573-30.183-16.669l-0.873-0.022C347.176,276.141,312,240.263,312,197
                                                c0-44.112,35.888-80,80-80s80,35.888,80,80C472,296.32,439.164,369.834,426.189,395z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>

                            <div class="quote-text-about text-justify">
                                <?= $config_direktur['kata_pengantar'] ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- Start of kepsek section
        ============================================= -->

<section id="profile" class="appseo-mission-area-section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="appseo-section-title2 appseo-headline pera-content">
                    <p>Profile SMA Muhammadiyah 1 Taman</p>
                    <h2>Profile</h2>
                </div>
                <p class="text-justify"><?= $konfigurasi_profile['about'] ?></p>
            </div>
            <div class="col-lg-4">
                <img src="<?= base_url('assets/backend/img/foto_profile_siswa/') . $konfigurasi_profile['img_profile'] ?>" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<!-- Visi misi -->
<section id="visimisi" class="appseo-service-section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="<?= base_url('assets/backend/img/foto_visi_dan_misi/') . $visi_misi['img_vision_mision'] ?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8">
                <div class="appseo-section-title2 appseo-headline pera-content ">
                    <p>Vision & Mission SMA Muhammadiyah 1 Taman</p>
                    <h2>Vision & Mission</h2>
                </div>

                <div class="card">
                    <div class="card-header collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h5 class="mb-0 ">
                            3 Pilar Utama
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <?= convertHtmlToText($visi_misi['summary']) ?>
                        </div>
                    </div>
                </div>

                <br>

                <div class="card">
                    <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h5 class="mb-0">
                            Vision
                        </h5>
                    </div>

                    <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <?= convertHtmlToText($visi_misi['vision']) ?>
                        </div>
                    </div>
                </div>


                <br>
                <div class="card">
                    <div class="card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h5 class="mb-0">
                            Mission
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse " aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">

                            <?= convertHtmlToText($visi_misi['mision'])  ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="appseo-section-title text-center appseo-headline pera-content position-relative">

        </div>

    </div>
    <div class="appseo-service-vector" data-parallax='{"y" : 100, "rotateY":500}'>
        <img src="assets/img/seo//shape/st.png" alt="">
    </div>
</section>
<!-- Visi misi -->

<!-- News new 3 -->
<section id="newnews" class="appseo-service-section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class=" appseo-section-title2 appseo-headline pera-content">
                    <p>News</p>
                </div>
            </div>
            <?php foreach ($berita as $b) : ?>
                <div class="col-lg-4">
                    <div class="card mb-2">

                        <div class="card-header">
                            <div class=" col-lg-12 mb-3">
                                <div class="saasio-blog-img">
                                    <img class="img-custom-news-home" src="<?= base_url('assets/backend/img/berita_images/') . $b['image_berita'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 px-4 text-justify-custom-news ">
                            <div class="saasio-blog-text">
                                <h5 class="mb-3 mt-2 text-center"><a href="<?= base_url('news/detail/') . $b['slug_berita'] ?>"><?= $b['headline'] ?></a></h5>
                                <div class="saasio-post-meta mb-3">
                                    <a href="#"><i class="fas fa-calendar-alt"></i> <?php $tanggal = $b['tanggal_publikasi'];
                                                                                    $new_date = date('d F Y', strtotime($tanggal));
                                                                                    echo ($new_date) ?></a>
                                    <a href="#"><i class="fas fa-user"></i> <?= $b['penulis'] ?></a>
                                </div>
                                <?php
                                require_once("./vendor/html2text/html2text/src/Html2Text.php");
                                $html = new \Html2Text\Html2Text($b['konten']);
                                ?>
                                <?php
                                $word = $html->getText();
                                ?>
                                <p style="text-align: justify ;">
                                    <?= strip_tags(substr($word, 0, 155)) . "......"  ?>
                                </p>
                                <a class="blog-read-more mb-4" href="<?= base_url('news/detail/') . $b['slug_berita'] ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="appseo-section-title text-center appseo-headline pera-content position-relative">

        </div>

    </div>
    <div class="appseo-service-vector" data-parallax='{"y" : 100, "rotateY":500}'>
        <img src="assets/img/seo//shape/st.png" alt="">
    </div>
</section>
<!-- News new 3 -->

<br>
<div class="float-right">

    <svg viewBox="0 0 36 36" fill="none" role="img" xmlns="http://www.w3.org/2000/svg" width="80" height="80">
        <title>SMILE</title>
        <mask id="mask__beam" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36">
            <rect width="36" height="36" rx="72" fill="#FFFFFF"></rect>
        </mask>
        <g mask="url(#mask__beam)">
            <rect width="36" height="36" fill="#ffa927"></rect>
            <rect x="0" y="0" width="36" height="36" transform="translate(5 -1) rotate(155 18 18) scale(1.2)" fill="#fc580c" rx="6"></rect>
            <g transform="translate(3 -4) rotate(-5 18 18)">
                <path d="M15 21c2 1 4 1 6 0" stroke="#000000" fill="none" stroke-linecap="round"></path>
                <rect x="14" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect>
                <rect x="20" y="14" width="1.5" height="2" rx="1" stroke="none" fill="#000000"></rect>
            </g>
        </g>
    </svg>
</div>

<section id="location">
    <div class="container">
        <div class="row justify-content-center">
            <h2>Our Location</h2>
        </div>

        <div class="row my-3">
            <div class="col-lg col-md embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.0582098781024!2d112.69992791376477!3d-7.347360694697842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fcb28a69137d%3A0xf27af3f90cbf362a!2sSMA%20Muhammadiyah%201%20Taman%20-%20Sidoarjo!5e0!3m2!1sid!2sid!4v1643486568138!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
<div class="d-flex mt-2">
    <!-- <img class="img-fuid" src="<?= base_url('assets/img/layered.svg') ?>" width="1500" alt="" srcset=""> -->
    <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0">
                <stop stop-color="rgba(25, 29, 66, 1)" offset="0%"></stop>
                <stop stop-color="rgba(100.325, 107.595, 180.293, 1)" offset="100%"></stop>
            </linearGradient>
        </defs>
        <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,98L30,106.2C60,114,120,131,180,138.8C240,147,300,147,360,163.3C420,180,480,212,540,220.5C600,229,660,212,720,187.8C780,163,840,131,900,147C960,163,1020,229,1080,228.7C1140,229,1200,163,1260,179.7C1320,196,1380,294,1440,277.7C1500,261,1560,131,1620,98C1680,65,1740,131,1800,130.7C1860,131,1920,65,1980,106.2C2040,147,2100,294,2160,351.2C2220,408,2280,376,2340,359.3C2400,343,2460,343,2520,351.2C2580,359,2640,376,2700,392C2760,408,2820,425,2880,416.5C2940,408,3000,376,3060,367.5C3120,359,3180,376,3240,334.8C3300,294,3360,196,3420,147C3480,98,3540,98,3600,138.8C3660,180,3720,261,3780,253.2C3840,245,3900,147,3960,155.2C4020,163,4080,278,4140,334.8C4200,392,4260,392,4290,392L4320,392L4320,490L4290,490C4260,490,4200,490,4140,490C4080,490,4020,490,3960,490C3900,490,3840,490,3780,490C3720,490,3660,490,3600,490C3540,490,3480,490,3420,490C3360,490,3300,490,3240,490C3180,490,3120,490,3060,490C3000,490,2940,490,2880,490C2820,490,2760,490,2700,490C2640,490,2580,490,2520,490C2460,490,2400,490,2340,490C2280,490,2220,490,2160,490C2100,490,2040,490,1980,490C1920,490,1860,490,1800,490C1740,490,1680,490,1620,490C1560,490,1500,490,1440,490C1380,490,1320,490,1260,490C1200,490,1140,490,1080,490C1020,490,960,490,900,490C840,490,780,490,720,490C660,490,600,490,540,490C480,490,420,490,360,490C300,490,240,490,180,490C120,490,60,490,30,490L0,490Z"></path>
    </svg>
</div>