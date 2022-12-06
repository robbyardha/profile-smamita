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
                        <h5>Berita</h5>

                    </div>
                    <div class="col">
                        <div class="float-end">
                            <a href="<?= base_url('berita/tambah') ?>" class="btn btn-sm btn-primary">Tambah</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card-body">
                <div class="table-responsive text-nowrap py-2 px-2">
                    <table class="table table-striped dt-responsive nowrap py-2 px-2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Headline</th>
                                <th>Kategori</th>
                                <th>Penulis</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php
                            $no = 1;
                            ?>
                            <?php
                            // var_dump($join_buku_new);
                            // die;
                            ?>
                            <?php foreach ($berita as $pn) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $pn['headline'] ?></td>
                                    <td><?= $pn['kategori'] ?></td>
                                    <td><?= $pn['penulis'] ?></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detail_modal<?= $pn['id'] ?>">Detail</a>
                                        <a href="<?= base_url('berita/ubah/') . $pn['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapus_modal<?= $pn['id'] ?>">Hapus</a>
                                    </td>
                                </tr>


                                <!-- Modal Detail -->
                                <div class="modal fade" id="detail_modal<?= $pn['id'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Detail Berita</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="type" class="form-label">Headline</label>
                                                        <p><?= $pn['headline'] ?></p>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="type" class="form-label">Kategori</label>
                                                        <p><?= $pn['kategori'] ?></p>

                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-3">
                                                        <label for="desc" class="form-label">Penulis</label>
                                                        <p><?= $pn['penulis'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-3">
                                                        <label for="desc" class="form-label">Tanggal Publikasi</label>
                                                        <p><?= $pn['tanggal_publikasi'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-3">
                                                        <label for="desc" class="form-label">Jam Publikasi</label>
                                                        <p><?= $pn['jam_publikasi'] ?></p>

                                                    </div>
                                                </div>

                                                <div class="row g-2">
                                                    <div class="col mb-3">
                                                        <label for="desc" class="form-label">Image Berita</label>
                                                        <img src="<?= base_url('assets/backend/img/berita_images/') . $pn['image_berita'] ?>" class="img-fluid img-thumbnail" alt="" srcset="">
                                                    </div>
                                                </div>

                                                <div class="row g-2">
                                                    <div class="col mb-3">
                                                        <label for="desc" class="form-label">Konten</label>
                                                        <textarea name="" id="" cols="30" rows="10" class="form-control" readonly><?= $pn['konten'] ?></textarea>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- End Modal Detail -->



                                <!-- Modal Hapus -->
                                <div class="modal fade" id="hapus_modal<?= $pn['id'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="<?= base_url('buku/hapus') ?>" method="post">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Hapus Buku</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin menghapus data <b><?= $pn['judul'] ?> ?</b> </p>

                                                    <p>Data yang dihapus tidak dapat dikembalikan.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" id="id" name="id" class="form-control" placeholder="Enter ID" value="<?= $pn['id'] ?>" />
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">Hapus </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Modal Hapus -->

                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>




        </div>
        <!--/ Basic Bootstrap Table -->


    </div>
    <!--/ Responsive Table -->
</div>
<!-- / Content -->