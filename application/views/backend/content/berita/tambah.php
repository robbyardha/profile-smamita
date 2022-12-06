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
                        <h5>Tambah Film</h5>

                    </div>

                </div>
            </div>

            <?php
            // $i = 0;
            // var_dump(sizeof($genre['genre']));
            // var_dump($genre['genre'][0]);
            // die;
            // foreach (GENRE_DATA as $g) {
            //     var_dump($g[$i++]);
            // }

            // for ($i = 0; $i <= sizeof($genre['genre']); $i++) {
            //     var_dump($i);
            // $genre['genre'][$i];
            // }
            // die;
            ?>
            <div class="card-body">

                <form action="<?= base_url('film/tambah') ?>" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col mb-3">
                            <label for="type" class="form-label">Judul Film</label>
                            <input type="text" id="judul" name="judul" class="form-control" placeholder="Enter Judul" value="<?= set_value('judul') ?>" />
                            <?= form_error('judul', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Genre </label>
                            <select class="form-control select2-multiple" name="genre[]" id="genre" multiple="multiple">
                                <?php for ($i = 0; $i < sizeof($genre['genre']); $i++) : ?>
                                    <option value="<?= $genre['genre'][$i] ?>"><?= $genre['genre'][$i] ?></option>
                                <?php endfor ?>
                            </select>
                            <?= form_error('genre', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Tahun Rilis</label>
                            <input type="number" id="tahun_rilis" name="tahun_rilis" class="form-control" placeholder="Enter Tahun Rilis" value="<?= set_value('tahun_rilis') ?>" />
                            <?= form_error('tahun_rilis', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Sutradara</label>
                            <input type="text" id="sutradara" name="sutradara" class="form-control" placeholder="Enter sutradara" value="<?= set_value('sutradara') ?>" />
                            <?= form_error('sutradara', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Sinopsis</label>
                            <textarea name="sinopsis" id="sinopsis" cols="30" rows="10" class="form-control"><?= set_value('sinopsis') ?></textarea>
                            <?= form_error('sinopsis', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Rating</label>
                            <input type="text" id="rating" name="rating" class="form-control" placeholder="Enter Rating" value="<?= set_value('rating') ?>" />
                            <?= form_error('rating', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Jenis</label>
                            <select name="jenis" id="jenis" class="form-control select2">
                                <option value="Film" <?= set_select('jenis', 'Film', true) ?>>Film</option>
                                <option value="TV Series" <?= set_select('jenis', 'TV Series', true) ?>>TV Series</option>
                            </select>
                            <?= form_error('jenis', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Based On</label>
                            <input type="text" id="based_on" name="based_on" class="form-control" placeholder="Enter based on" value="<?= set_value('based_on') ?>" />
                            <?= form_error('based_on', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Cover Film Image</label>
                            <input type="file" id="cover_film_img" name="cover_film_img" class="form-control dropify" placeholder="Enter Illustrator By" />
                            <?= form_error('cover_film_img', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="float-end">
                        <a href="<?= base_url('penerbit') ?>" class="btn btn-secondary mt-2">Cancel</a>
                        <button type="submit" class="btn btn-primary mt-2">Tambah</button>
                    </div>


                </form>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
    <!--/ Responsive Table -->
</div>
<!-- / Content -->