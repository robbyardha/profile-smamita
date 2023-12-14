<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>

<style>
    /* SIZE FOR BANNER BILLBOARD */
    .banner-size-billboard {
        height: 250px;
        width: 970px;
    }
</style>
<div class="container mt-3">
    <div class="row">
        <div class="owl-carousel owl-theme">
            <?php foreach ($banner_showlist as $bslist) : ?>
                <div class="card">
                    <img class="banner-size-billboard" src="<?= base_url('assets/backend/img/banner_header/') . $bslist['img_banner'] ?>" alt="<?= $bslist['nama_banner'] ?>" srcset="">
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<!-- Start of blog page section
        ============================================= -->
<section id="news-feed" class="news-feed-section">
    <div class="container">
        <div class="blog-feed-content">
            <div class="row">
                <div class="col-md-8">
                    <?php if ($this->input->get() == NULL) : ?>
                        <?php foreach ($berita as $b) : ?>
                            <div class="blog-feed-post">
                                <div class="blog-feed-img-txt">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="saasio-blog-img">
                                                <img class="img-custom-news-home" src="<?= base_url('assets/backend/img/berita_images/') . $b['image_berita'] ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="saasio-blog-text">
                                                <h5 style="text-align: justify ;"><a href="<?= base_url('news/detail/') . $b['slug_berita'] ?>"><?= $b['headline'] ?></a></h5>
                                                <div class="saasio-post-meta">
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
                            </div>

                        <?php endforeach ?>
                    <?php elseif ($this->input->get('keyword')) : ?>
                        <?php if ($search_berita == null) : ?>
                            <div class="alert alert-danger" role="alert">
                                Maaf Berita Di Search Tidak Ditemukan, Silahkan menggunakan keyword yang lain
                            </div>
                        <?php else : ?>
                            <?php foreach ($search_berita as $sb) : ?>
                                <div class="blog-feed-post">
                                    <div class="blog-feed-img-txt">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="saasio-blog-img">
                                                    <img src="<?= base_url('assets/backend/img/berita_images/') . $sb['image_berita'] ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="saasio-blog-text">
                                                    <h5 style="text-align: justify ;"><a href="<?= base_url('news/detail/') . $sb['slug_berita'] ?>"><?= $sb['headline'] ?></a></h5>
                                                    <div class="saasio-post-meta">
                                                        <a href="#"><i class="fas fa-calendar-alt"></i> <?php $tanggal = $sb['tanggal_publikasi'];
                                                                                                        $new_date = date('d F Y', strtotime($tanggal));
                                                                                                        echo ($new_date) ?></a>
                                                        <a href="#"><i class="fas fa-user"></i> <?= $sb['penulis'] ?></a>
                                                    </div>
                                                    <?php
                                                    require_once("./vendor/html2text/html2text/src/Html2Text.php");
                                                    // $html = new \Html2Text\Html2Text('Hello, &quot;<b>world</b>&quot;');
                                                    $html = new \Html2Text\Html2Text($sb['konten']);

                                                    //echo $html->getText();  // Hello, "WORLD"
                                                    ?>
                                                    <?php
                                                    // $word = strlen($html->getText() > 55);
                                                    //$new_word = mb_substr($html->getText(), 0, 100) . "....";
                                                    // var_dump($new_word);
                                                    // die;
                                                    // var_dump(strip_tags($html->getText()));
                                                    // substr($html->getText(), 0, 100)
                                                    // die;
                                                    $word = $html->getText();
                                                    ?>
                                                    <p style="text-align: justify ;">
                                                        <?= strip_tags(substr($word, 0, 155)) . "......"  ?>
                                                    </p>
                                                    <a class="blog-read-more mb-4" href="<?= base_url('news/detail/') . $sb['slug_berita'] ?>">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif; ?>
                    <?php elseif ($this->input->get('kategori')) : ?>
                        <?php if ($search_berita_by_kategori == null) : ?>
                            <div class="alert alert-danger" role="alert">
                                Maaf Berita Di Kategori Masih Kosong, Silahkan memilih kategori yang lain
                            </div>
                        <?php else : ?>
                            <?php foreach ($search_berita_by_kategori as $sbbykat) : ?>
                                <div class="blog-feed-post">
                                    <div class="blog-feed-img-txt">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="saasio-blog-img">
                                                    <img src="<?= base_url('assets/backend/img/berita_images/') . $sbbykat['image_berita'] ?>" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="saasio-blog-text">
                                                    <h5 style="text-align: justify ;"><a href="<?= base_url('news/detail/') . $sbbykat['slug_berita'] ?>"><?= $sbbykat['headline'] ?></a></h5>
                                                    <div class="saasio-post-meta">
                                                        <a href="#"><i class="fas fa-calendar-alt"></i> <?php $tanggal = $sbbykat['tanggal_publikasi'];
                                                                                                        $new_date = date('d F Y', strtotime($tanggal));
                                                                                                        echo ($new_date) ?></a>
                                                        <a href="#"><i class="fas fa-user"></i> <?= $sbbykat['penulis'] ?></a>
                                                    </div>
                                                    <?php
                                                    require_once("./vendor/html2text/html2text/src/Html2Text.php");
                                                    // $html = new \Html2Text\Html2Text('Hello, &quot;<b>world</b>&quot;');
                                                    $html = new \Html2Text\Html2Text($sbbykat['konten']);

                                                    //echo $html->getText();  // Hello, "WORLD"
                                                    ?>
                                                    <?php
                                                    // $word = strlen($html->getText() > 55);
                                                    //$new_word = mb_substr($html->getText(), 0, 100) . "....";
                                                    // var_dump($new_word);
                                                    // die;
                                                    // var_dump(strip_tags($html->getText()));
                                                    // substr($html->getText(), 0, 100)
                                                    // die;
                                                    $word = $html->getText();
                                                    ?>
                                                    <p style="text-align: justify ;">
                                                        <?= strip_tags(substr($word, 0, 155)) . "......"  ?>
                                                    </p>
                                                    <a class="blog-read-more mb-4" href="<?= base_url('news/detail/') . $sbbykat['slug_berita'] ?>">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        <?php endif; ?>
                    <?php else : ?>
                        <div class="alert alert-danger" role="alert">
                            Maaf Pencarian Tidak ditemukan, Silahkan menggunakan keyword yang lain atau dengan kategori
                        </div>
                    <?php endif ?>
                </div>
                <div class="col-md-4">
                    <div class="saasio-blog-sidebar">
                        <div class="side-bar-widget">
                            <div class="search-widget dia-headline">
                                <h3 class="widget-title-2">Search</h3>
                                <form action="" method="GET" class="relative-position">
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
                                        <li><a href="news?kategori=<?= $k['kategori'] ?>"><?= $k['kategori'] ?></a></li>
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
        <?= $this->pagination->create_links(); ?>

    </div>
</section>