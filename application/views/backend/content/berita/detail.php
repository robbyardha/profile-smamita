<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Published /</span> News</h4>


        <?php

        use Html2Text\Html2Text;

        if ($this->session->flashdata('message')) : ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <?= $this->session->flashdata('message') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php elseif ($this->session->flashdata('message_error')) : ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <?= $this->session->flashdata('message_error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif ?>

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h5>Ubah Berita</h5>

                    </div>

                </div>
            </div>


            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="type" class="form-label">Headline</label>
                            <input type="text" id="headline" name="headline" class="form-control" placeholder="Enter headline" value="<?= set_value('headline', $berita_id['headline']) ?>" readonly />
                            <?= form_error('headline', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>


                    <?php
                    // var_dump($kategori[1]);
                    // var_dump($genre['genre']);
                    // var_dump($film_id['genre']);

                    $arr_kategori_comma_db = explode(',', $berita_id['kategori']);

                    $trimmed_array = array_map('trim', $arr_kategori_comma_db);
                    // var_dump($trimmed_array);

                    // $new_arry_kategori = [];
                    // for ($i = 0; $i < sizeof($kategori); $i++) {
                    //     $new =  $kategori[$i];
                    //     array_push($new_arry_kategori, $new['kategori']);
                    // }
                    // var_dump($new_arry_kategori);


                    // for ($i = 0; $i < sizeof($genre['genre']); $i++) {
                    //     $new =  $genre['genre'][$i];
                    // }
                    // for ($j = 0; $j < sizeof($arr_genre_film_db); $j++) {
                    //     $msadm = $arr_genre_film_db[$j];
                    // }
                    // $inter = array_intersect($trimmed_array, $genre['genre']);
                    // $in_arr = in_array($trimmed_array, $genre['genre']);
                    // var_dump($inter);
                    // var_dump($in_arr);
                    // die;

                    // die;
                    ?>

                    <?php
                    // if (array_intersect($trimmed_array, $genre['genre'])) {
                    //     echo "sama";
                    // }
                    ?>

                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Kategori </label>
                            <select class="form-control select2-multiple" name="kategori[]" id="kategori" multiple="multiple" readonly>
                                <?php
                                $blank_arr = [];
                                $new_array_kategori = [];
                                ?>
                                <?php for ($i = 0; $i < sizeof($kategori); $i++) : ?>
                                    <?php
                                    $new =  $kategori[$i];
                                    array_push($new_array_kategori, $new['kategori']);
                                    ?>
                                    <?php for ($j = 0; $j < sizeof($trimmed_array); $j++) : ?>
                                        <?php if ($new_array_kategori[$i] == $trimmed_array[$j]) : ?>
                                            <option value="<?= $trimmed_array[$j] ?>" selected><?= $trimmed_array[$j] ?></option>
                                        <?php else : ?>
                                            <option value="<?= $new_array_kategori[$i] ?>"><?= $new_array_kategori[$i] ?></option>
                                        <?php endif ?>
                                    <?php endfor ?>
                                <?php endfor ?>

                            </select>
                            <?= form_error('genre', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Konten</label>
                            <?php
                            require_once("./vendor/html2text/html2text/src/Html2Text.php");
                            // $html = new \Html2Text\Html2Text('Hello, &quot;<b>world</b>&quot;');
                            $html = new \Html2Text\Html2Text($berita_id['konten']);

                            //echo $html->getText();  // Hello, "WORLD"
                            ?>
                            <textarea name="konten" id="konten" cols="80" rows="10" class="form-control ckeditor" readonly><?= set_value('konten', $html->getText()) ?></textarea>
                            <?= form_error('konten', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Headline Image News Now</label>
                            <img src="<?= base_url('assets/backend/img/berita_images/') . $berita_id['image_berita'] ?>" class="img-fluid" alt="" srcset="">

                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Penulis</label>
                            <input type="text" id="penulis" name="penulis" class="form-control" placeholder="Enter penulis" value="<?= set_value('penulis', $berita_id['penulis']) ?>" readonly />
                            <?= form_error('penulis', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Tanggal Publikasi</label>
                            <input type="text" id="tanggal_publikasi" name="tanggal_publikasi" class="form-control" placeholder="Enter tanggal publikasi" value="<?= set_value('tanggal_publikasi', $berita_id['tanggal_publikasi']) ?>" readonly />
                            <?= form_error('tanggal_publikasi', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Jam Publikasi</label>
                            <input type="text" id="jam_publikasi" name="jam_publikasi" class="form-control" placeholder="Enter jam publikasi" value="<?= set_value('jam_publikasi', $berita_id['jam_publikasi']) ?>" readonly />
                            <?= form_error('jam_publikasi', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>



                    <div class="float-end">
                        <input type="hidden" id="id" name="id" class="form-control" value="<?= $berita_id['id'] ?>">
                        <a href="<?= base_url('berita') ?>" class="btn btn-secondary mt-2">Cancel</a>
                    </div>


                </form>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
    <!--/ Responsive Table -->
</div>
<!-- / Content -->