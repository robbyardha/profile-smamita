<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>

<style>
    .content {
        font-size: 12px;
        font-style: italic;
    }
</style>

<!-- Start of blog page section ============================================= -->
<section id="news-feed" class="news-feed-section">
    <div class="container">
        <div class="blog-feed-content">
            <div class="row">
                <div class="col-md-8">
                    <div class="saasio-blog-details-content">
                        <div class="blog-details-img">
                            <!-- size image 872 x 303 -->
                            <img class="img-custom-news" src="<?= base_url('assets/backend/img/berita_images/') . $berita_slug['image_berita'] ?>" alt="">
                            <p class="text-center content"><?= $berita_slug['headline'] ?> </p>
                        </div>
                        <div class="blog-details-text dia-headline">
                            <h2><?= $berita_slug['headline'] ?></h2>
                            <div class="saasio-post-meta">
                                <a href="#"><i class="fas fa-calendar-alt"></i> <?php $tanggal = $berita_slug['tanggal_publikasi'];
                                                                                $new_date = date('d F Y', strtotime($tanggal));
                                                                                echo ($new_date) ?></a>
                                <a href="#"><i class="fas fa-user"></i> <?= $berita_slug['penulis'] ?></a>

                                <a href="javascript:void(0)" id="copyToClipBoard"><i class="fab fa-whatsapp"></i> SHARE WHATSAPP</a>
                                <input style="opacity: 0;" id="baseUrl" value="<?= $url_web ?>">
                            </div>

                            <article class="text-justify-custom-news">
                                <?= convertHtmlToText($berita_slug['konten']) ?>
                            </article>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="saasio-blog-sidebar">
                        <div class="side-bar-widget">
                            <div class="search-widget dia-headline">
                                <h3 class="widget-title-2">Search</h3>
                                <form action="<?= base_url('news') ?>?keyword=" method="GET" class="relative-position">
                                    <input type="text" id="keyword" name="keyword" placeholder="Search Here">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="side-bar-widget">
                            <div class="category-widget dia-headline ul-li-block">
                                <h3 class="widget-title-2">Category</h3>
                                <ul>
                                    <?php foreach ($kategori as $k) : ?>
                                        <li><a href="<?= base_url('news?kategori=' . $k['kategori']) ?>"><?= $k['kategori'] ?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                        <div class="side-bar-widget">
                            <div class="category-widget dia-headline ul-li-block">
                                <h3 class="widget-title-2">Recent Post</h3>
                                <div class="recent-post-area">
                                    <?php foreach ($recent_news as $rn) : ?>
                                        <div class="recent-post-img-text">
                                            <div class="recent-post-img float-left">
                                                <img src="<?= base_url('assets/backend/img/berita_images/') . $rn['image_berita'] ?>" alt="">
                                            </div>
                                            <div class="recent-post-text dia-headline">
                                                <h5><a href="<?= base_url('news/detail/') . $rn['slug_berita'] ?>"><?= $rn['headline'] ?></a></h5>
                                                <span class="rec-post-meta"><a href="#"><?php $tanggal = $rn['tanggal_publikasi'];
                                                                                        $new_date = date('d F Y', strtotime($tanggal));
                                                                                        echo ($new_date) ?></a></span>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <div class="side-bar-widget">
                            <div class="popular-widget dia-headline ul-li">
                                <h3 class="widget-title-2">Popular Tag</h3>
                                <ul>
                                    <li><a href="<?= base_url('news') ?>?kategori=Terbaru">Terbaru </a></li>
                                    <li><a href="<?= base_url('news') ?>?kategori=Prestasi">Prestasi </a></li>
                                    <li><a href="<?= base_url('news') ?>?kategori=Hiburan">Hiburan </a></li>
                                    <li><a href="<?= base_url('news') ?>?kategori=Technology">Technology </a></li>
                                    <li><a href="<?= base_url('news') ?>?kategori=Opini">Opini </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of blog section ============================================= -->