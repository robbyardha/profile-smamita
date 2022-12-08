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
                        <h5>Tambah Berita</h5>

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

                <form action="<?= base_url('berita/tambah') ?>" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col mb-3">
                            <label for="type" class="form-label">Headline</label>
                            <input type="text" id="headline" name="headline" class="form-control" placeholder="Enter headline" value="<?= set_value('headline') ?>" />
                            <?= form_error('headline', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Kategori </label>
                            <select class="form-control select2-multiple" name="kategori[]" id="kategori" multiple="multiple">
                                <?php foreach ($kategori as $k) : ?>
                                    <option value="<?= $k['kategori'] ?>"><?= $k['kategori'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <?= form_error('kategori', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Konten</label>
                            <textarea name="konten" id="editor" cols="80" rows="10" class="form-control"><?= set_value('konten') ?></textarea>
                            <?= form_error('konten', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>


                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="desc" class="form-label">Headline Image News</label>
                            <input type="file" id="image_berita" name="image_berita" class="form-control dropify" placeholder="Enter Illustrator By" />
                            <?= form_error('image_berita', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="float-end">
                        <a href="<?= base_url('berita') ?>" class="btn btn-secondary mt-2">Cancel</a>
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