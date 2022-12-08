<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
<style>
    .text-justify-custom-news {
        text-align: justify;
    }

    .img-custom-news {
        margin: auto;
        display: block;
        text-align: center;
        height: 350px;
    }
</style>

<!-- Start of blog page section
        ============================================= -->
<section id="news-feed" class="news-feed-section">
    <div class="container">
        <div class="blog-feed-content">
            <div class="row">
                <div class="col-md-8">
                    <div class="saasio-blog-details-content">
                        <div class="blog-details-img">
                            <!-- size image 872 x 303 -->
                            <img src="<? //= base_url('assets/img/blog/news-9.jpg') 
                                        ?>" alt="">
                            <img class="img-custom-news" src="<?= base_url('assets/backend/img/berita_images/') . $berita_slug['image_berita'] ?>" alt="">
                        </div>
                        <div class="blog-details-text dia-headline">
                            <h2><?= $berita_slug['headline'] ?></h2>
                            <div class="saasio-post-meta">
                                <a href="#"><i class="fas fa-calendar-alt"></i> <?php $tanggal = $berita_slug['tanggal_publikasi'];
                                                                                $new_date = date('d F Y', strtotime($tanggal));
                                                                                echo ($new_date) ?></a>
                                <a href="#"><i class="fas fa-user"></i> <?= $berita_slug['penulis'] ?></a>
                            </div>

                            <article class="text-justify-custom-news">
                                <?php
                                require_once("./vendor/html2text/html2text/src/Html2Text.php");
                                // $html = new \Html2Text\Html2Text('Hello, &quot;<b>world</b>&quot;');
                                $html = new \Html2Text\Html2Text($berita_slug['konten']);
                                $word = $html->getText();

                                ?>
                                <?= $word ?>
                            </article>
                            <!-- <article>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum The man, who is in a stable condition in hospital, has "potentially life-changing injuries" after the overnight attack in Garvagh, County Lono donderry. He was shot in the arms and legs."What sort of men would think it is accepttable to sub ject a young girl to this level of brutality and violence?
                            </article>
                            <h3>Young girl to this level of brutality.</h3>
                            <article>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum The man, who is in a stable condition in hospital, has "potentially life-changing injuries" after the overnight attack in Garvagh, County Lono donderry. He was shot in the arms and legs."What sort of men would think it is accepttable to sub ject a young girl to this level of brutality and violence?
                            </article>
                            <article>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum The man, who is in a stable condition in hospital.He was shot in the arms and legs."What sort of men would think it is accepttable to sub ject a young girl to this level of brutality and violence?
                            </article>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="assets/img/blog/news-10.jpg" alt="">
                                </div>
                                <div class="col-md-6">
                                    <img src="assets/img/blog/news-11.jpg" alt="">
                                </div>
                            </div>
                            <article>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum The man, who is in a stable condition in hospital, has "potentially life-changing injuries" after the overnight attack in Garvagh, County Lono donderry. He was shot in the arms and legs."What sort of men would think it is accepttable to sub ject a young girl to this level of brutality and violence?
                            </article>
                            <blockquote>
                                the readable content of a page when looking at its layout. The point of using Lorem Ipsum The man, who is in a stable condition in hospital, has "potentially life-changing injuries" after the overnight attack in Garvagh, County Lono donderry.
                                <h4>-Jemes Cook</h4>
                            </blockquote>
                            <article>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum The man, who is in a stable condition in hospital, has "potentially life-changing injuries" after the overnight attack in Garvagh, County Lono donderry. He was shot in the arms and legs."What sort of men would think it is accepttable to sub ject a young girl to this level of brutality and violence?
                            </article>
                            <article>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum The man, who is in a stable condition in hospital.He was shot in the arms and legs."What sort of men would think it is accepttable to sub ject a young girl to this level of brutality and violence?
                            </article> -->
                        </div>



                        <!-- COMMENT FEATURE -->

                        <!-- <div class="blog-details-tag clearfix">
                            <div class="blog-feed-tag float-left">
                                <span>Tags:</span>
                                <a href="#">Business</a>
                                <a href="#">Life</a>
                                <a href="#">SaaSio</a>
                            </div>
                            <div class="blog-feed-share float-right">
                                <span>Share:</span>
                                <a href="#"><i class="fb-bg fab fa-facebook-f "></i></a>
                                <a href="#"><i class="bh-bg fab fa-behance"></i></a>
                                <a href="#"><i class="tw-bg fab fa-twitter"></i></a>
                                <a href="#"><i class="dr-bg fab fa-dribbble"></i></a>
                            </div>
                        </div>
                        <div class="saasio-comment-field dia-headline">
                            <h3>Comments (03)</h3>
                            <div class="comment-list-item">
                                <div class="comment-inner-box">
                                    <div class="comment-author-img float-left">
                                        <img src="assets/img/blog/ca1.jpg" alt="">
                                    </div>
                                    <div class="comment-author-text">
                                        <h4><a href="#">Rolax Fellan</a></h4>
                                        <span>November 25, 2021 at 09:00 am</span>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.</p>
                                        <a class="comment-reply" href="#">Reply</a>
                                    </div>
                                </div>
                                <div class="comment-inner-box">
                                    <div class="comment-author-img float-left">
                                        <img src="assets/img/blog/ca2.jpg" alt="">
                                    </div>
                                    <div class="comment-author-text">
                                        <h4><a href="#">Daile Cane</a></h4>
                                        <span>November 25, 2021 at 09:00 am</span>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.</p>
                                        <a class="comment-reply" href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <h3>Post a comment</h3>
                            <div class="comment-form">
                                <form action="#">
                                    <input type="text" name="name" placeholder="Enter Your Full Name">
                                    <input type="email" name="email" placeholder="Enter Your  Email Address">
                                    <input type="tetx" name="website" placeholder="Enter Your Website">
                                    <textarea name="message" placeholder="Your Comment here..."></textarea>
                                    <button type="submit">Comment</button>
                                </form>
                            </div>
                        </div> -->

                        <!-- END COMMENT FEATURE -->



                    </div>
                </div>
                <div class="col-md-4">
                    <div class="saasio-blog-sidebar">
                        <div class="side-bar-widget">
                            <div class="search-widget dia-headline">
                                <h3 class="widget-title-2">Search</h3>
                                <form action="<?= base_url('news') ?>/?keyword=" method="GET" class="relative-position">
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
    </div>
</section>
<!-- End of blog section
        ============================================= -->