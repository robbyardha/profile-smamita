<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Published /</span> News</h4>


        <?php if ($this->session->flashdata('message')) : ?>
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
                        <h5>Ubah Film</h5>

                    </div>

                </div>
            </div>


            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col mb-3">
                            <label for="type" class="form-label">Judul Film</label>
                            <input type="text" id="judul" name="judul" class="form-control" placeholder="Enter Judul" value="<?= set_value('judul', $film_id['judul']) ?>" />
                            <?= form_error('judul', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <?php
                    // var_dump($genre['genre']);
                    // var_dump($film_id['genre']);
                    $arr_genre_film_db = explode(',', $film_id['genre']);

                    $trimmed_array = array_map('trim', $arr_genre_film_db);
                    // var_dump($trimmed_array);

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
                            <label for="desc" class="form-label">Genre </label>
                            <select class="form-control select2-multiple" name="genre[]" id="genre" multiple="multiple">
                                <?php
                                $blank_arr = [];
                                ?>
                                <?php for ($i = 0; $i < sizeof($genre['genre']); $i++) : ?>
                                    <?php for ($j = 0; $j < sizeof($trimmed_array); $j++) : ?>
                                        <?php if ($genre['genre'][$i] == $trimmed_array[$j]) : ?>
                                            <option value="<?= $trimmed_array[$j] ?>" selected><?= $trimmed_array[$j] ?></option>
                                        <?php else : ?>
                                            <option value="<?= $genre['genre'][$i] ?>"><?= $genre['genre'][$i] ?></option>
                                        <?php endif ?>
                                    <?php endfor ?>
                                <?php endfor ?>
                            </select>
                            <?= form_error('genre', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Tahun Rilis</label>
                            <input type="number" id="tahun_rilis" name="tahun_rilis" class="form-control" placeholder="Enter Tahun Rilis" value="<?= set_value('tahun_rilis',  $film_id['tahun_rilis']) ?>" />
                            <?= form_error('tahun_rilis', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Sutradara</label>
                            <input type="text" id="sutradara" name="sutradara" class="form-control" placeholder="Enter sutradara" value="<?= set_value('sutradara', $film_id['sutradara']) ?>" />
                            <?= form_error('sutradara', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Sinopsis</label>
                            <textarea name="sinopsis" id="sinopsis" cols="30" rows="10" class="form-control"><?= set_value('sinopsis', $film_id['sinopsis']) ?></textarea>
                            <?= form_error('sinopsis', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Rating</label>
                            <input type="text" id="rating" name="rating" class="form-control" placeholder="Enter Rating" value="<?= set_value('rating', $film_id['rating']) ?>" />
                            <?= form_error('rating', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Jenis</label>
                            <select name="jenis" id="jenis" class="form-control select2">
                                <option value="Film" <?= set_select('jenis', 'Film', true) ?><?php if ($film_id['jenis'] == "Film") {
                                                                                                    echo "selected";
                                                                                                } ?>>Film</option>
                                <option value="TV Series" <?= set_select('jenis', 'TV Series', true) ?><?php if ($film_id['jenis'] == "TV Series") {
                                                                                                            echo "selected";
                                                                                                        } ?>>TV Series</option>
                            </select>
                            <?= form_error('jenis', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Based On</label>
                            <input type="text" id="based_on" name="based_on" class="form-control" placeholder="Enter based on" value="<?= set_value('based_on', $film_id['based_on']) ?>" />
                            <?= form_error('based_on', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Book Cover Now</label>
                            <img src="<?= base_url('assets/backend/img/film_cover/') . $film_id['cover_film_img'] ?>" class="img-fluid" alt="" srcset="">

                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Update Cover Film Image</label>
                            <input type="file" id="cover_film_img" name="cover_film_img" class="form-control dropify" />
                            <?= form_error('cover_film_img', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="float-end">
                        <input type="hidden" id="id" name="id" class="form-control" value="<?= $film_id['id'] ?>">
                        <a href="<?= base_url('penerbit') ?>" class="btn btn-secondary mt-2">Cancel</a>
                        <button type="submit" class="btn btn-primary mt-2">Ubah</button>
                    </div>


                </form>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
    <!--/ Responsive Table -->
</div>
<!-- / Content -->