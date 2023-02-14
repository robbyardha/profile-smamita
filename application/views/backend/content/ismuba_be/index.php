<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Teams /</span> List</h4>


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
                        <h5>Ismuba Profile</h5>
                    </div>
                    <div class="col">
                        <?php if ($ismuba_profile == NULL || $ismuba_profile == "") : ?>
                            <div class="float-end">
                                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#tambah_modal">Tambah</a>
                            </div>
                        <?php else : ?>
                            <div class="float-end">
                                <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#ubah_modal<?= $ismuba_profile['id'] ?>">Ubah</a>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </div>

            <?php if ($ismuba_profile == NULL || $ismuba_profile == "") : ?>
                <div class="card-body">
                    <div class="alert alert-danger" role="alert">
                        <strong>Profile Masih Kosong Silahkan Isi Data</strong>
                    </div>
                </div>
            <?php else : ?>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama_ismuba" class="form-label">Nama</label>
                        <p><strong><?= $ismuba_profile['nama_ismuba'] ?></strong></p>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_ismuba" class="form-label">Deskripsi</label>
                        <p><strong><?= $ismuba_profile['deskripsi_ismuba'] ?></strong></p>
                    </div>
                    <div class="mb-3">
                        <label for="program_kerja" class="form-label">Program Kerja</label>
                        <div class="ratio ratio-16x9">
                            <iframe src="<?= base_url('assets/file_upload/ismuba/profile/') . $ismuba_profile['program_kerja'] ?>" title="Program Kerja" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            <?php endif ?>


            <!-- Modal Tambah -->
            <div class="modal fade" id="tambah_modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="<?= base_url('ismuba_be/isi_profile') ?>" enctype="multipart/form-data" method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Isi Profile Ismuba</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="nama_ismuba" class="form-label">Nama</label>
                                        <input type="text" readonly id="nama_ismuba" name="nama_ismuba" class="form-control" value="Ismuba" />
                                        <?= form_error('nama_ismuba', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-0">
                                        <label for="deskripsi_ismuba" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi_ismuba" id="deskripsi_ismuba" cols="30" rows="10"></textarea>
                                        <?= form_error('deskripsi_ismuba', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="program_kerja" class="form-label">Upload File Program Kerja</label>
                                        <input type="file" id="program_kerja" name="program_kerja" class="form-control" accept="application/pdf, application/vnd.ms-powerpoint" />
                                        <small class="text-muted">File Berupa PDF & MAX. 10 MB</small>
                                        <?= form_error('program_kerja', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Modal Tambah -->

            <?php if ($ismuba_profile == NULL) : ?>
            <?php else : ?>
                <!-- Modal Ubah -->
                <div class="modal fade" id="ubah_modal<?= $ismuba_profile['id'] ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form action="<?= base_url('ismuba_be/ubah_profile') ?>" enctype="multipart/form-data" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Ubah Profile ismuba</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nama_ismuba" class="form-label">Nama</label>
                                            <input type="hidden" readonly id="id" name="id" class="form-control" value="<?= $ismuba_profile['id'] ?>" />
                                            <input type="text" readonly id="nama_ismuba" name="nama_ismuba" class="form-control" value="Ismuba" />
                                            <?= form_error('nama_ismuba', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="deskripsi_ismuba" class="form-label">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi_ismuba" id="deskripsi_ismuba" cols="30" rows="10"><?= $ismuba_profile['deskripsi_ismuba'] ?></textarea>
                                            <?= form_error('deskripsi_ismuba', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="program_kerja" class="form-label">Upload File Program Kerja</label>
                                            <input type="file" id="program_kerja" name="program_kerja" class="form-control" accept="application/pdf, application/vnd.ms-powerpoint" />
                                            <small class="text-muted">File Berupa PDF & MAX. 10 MB</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-warning">Ubah</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Modal Ubah -->
            <?php endif ?>

        </div>
        <!--/ Basic Bootstrap Table -->


    </div>
    <!--/ Responsive Table -->
</div>
<!-- / Content -->