<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Prestasi /</span> List</h4>


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
                        <h5>Prestasi List</h5>

                    </div>
                    <div class="col">
                        <div class="float-end">
                            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#tambah_modal">Tambah</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card-body">
                <div class="table-responsive text-nowrap py-2 px-2">
                    <table class="table table-striped dt-responsive nowrap datatables py-1 px-1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php
                            $no = 1;
                            ?>
                            <?php foreach ($prestasi as $krstr) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $krstr['nama_siswa'] ?></td>
                                    <td><?= $krstr['kelas'] ?></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#lihat_modal<?= $krstr['id'] ?>">Lihat</a>
                                        <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#ubah_modal<?= $krstr['id'] ?>">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapus_modal<?= $krstr['id'] ?>">Hapus</a>
                                    </td>
                                </tr>


                                <!-- Modal Lihat -->
                                <div class="modal fade" id="lihat_modal<?= $krstr['id'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Lihat Prestasi <?= $krstr['nama_siswa'] ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="type" class="form-label">Nama</label>
                                                        <p><?= $krstr['nama_siswa'] ?></p>

                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-3">
                                                        <label for="type" class="form-label">Kelas</label>
                                                        <p><?= $krstr['kelas'] ?></p>

                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-3">
                                                        <label for="type" class="form-label">Nama Prestasi</label>
                                                        <p><?= $krstr['nama_prestasi'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-3">
                                                        <label for="type" class="form-label">Tingkat Prestasi</label>
                                                        <p><?= $krstr['tingkat_prestasi'] ?></p>

                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-3">
                                                        <label for="type" class="form-label">Tahun Prestasi</label>
                                                        <p><?= $krstr['tahun_prestasi'] ?></p>

                                                    </div>
                                                </div>
                                                <div class="row g-2">
                                                    <div class="col mb-0">
                                                        <label for="foto" class="form-label">Foto</label>
                                                        <br>
                                                        <img height="350px" src="<?= base_url('assets/file_upload/kesiswaan/prestasi/') . $krstr['foto'] ?>" alt="" srcset="">
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
                                <!-- End Modal Lihat -->

                                <!-- Modal Ubah -->
                                <div class="modal fade" id="ubah_modal<?= $krstr['id'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="<?= base_url('prestasi_be/ubah') ?>" enctype="multipart/form-data" method="post">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Ubah Prestas <?= $krstr['nama_siswa'] ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label for="type" class="form-label">Nama</label>
                                                            <input type="hidden" readonly id="id" name="id" class="form-control" value="<?= $krstr['id'] ?>" placeholder="Enter nama" />
                                                            <input type="text" id="nama_siswa" name="nama_siswa" class="form-control" value="<?= $krstr['nama_siswa'] ?>" placeholder="Enter nama siswa" />
                                                            <?= form_error('nama_siswa', '<small class="text-danger">', '</small>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col mb-3">
                                                            <label for="type" class="form-label">Kelas</label>
                                                            <input type="text" id="kelas" name="kelas" class="form-control" value="<?= $krstr['kelas'] ?>" placeholder="Enter nama siswa" />
                                                            <?= form_error('kelas', '<small class="text-danger">', '</small>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col mb-3">
                                                            <label for="type" class="form-label">Nama Prestasi</label>
                                                            <input type="text" id="nama_prestasi" name="nama_prestasi" class="form-control" value="<?= $krstr['nama_prestasi'] ?>" placeholder="Enter nama siswa" />
                                                            <?= form_error('nama_prestasi', '<small class="text-danger">', '</small>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col mb-3">
                                                            <label for="type" class="form-label">Tingkat Prestasi</label>
                                                            <input type="text" id="tingkat_prestasi" name="tingkat_prestasi" class="form-control" value="<?= $krstr['tingkat_prestasi'] ?>" placeholder="Enter nama siswa" />
                                                            <?= form_error('tingkat_prestasi', '<small class="text-danger">', '</small>') ?>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="col mb-3">
                                                            <label for="type" class="form-label">Tahun Prestasi</label>
                                                            <input type="number" id="tahun_prestasi" name="tahun_prestasi" class="form-control" value="<?= $krstr['tahun_prestasi'] ?>" placeholder="Enter nama siswa" />
                                                            <?= form_error('tahun_prestasi', '<small class="text-danger">', '</small>') ?>
                                                        </div>
                                                    </div>

                                                    <div class="row g-2">
                                                        <div class="col mb-3">
                                                            <label for="foto" class="form-label">Upload File Foto</label>
                                                            <input type="file" id="foto" name="foto" class="form-control" accept="image/*" />
                                                            <small class="text-muted">File Berupa JPG, JPEG, PNG, & MAX. 10 MB</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Modal Ubah -->

                                <!-- Modal Hapus -->
                                <div class="modal fade" id="hapus_modal<?= $krstr['id'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="<?= base_url('prestasi_be/hapus') ?>" method="post">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Hapus Prestasi <?= $krstr['nama_siswa'] ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin menghapus data <b><?= $krstr['nama_siswa'] ?> ?</b> </p>

                                                    <p>Data yang dihapus tidak dapat dikembalikan.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" id="id" name="id" class="form-control" placeholder="Enter ID" value="<?= $krstr['id'] ?>" />
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

            <!-- Modal Tambah -->
            <div class="modal fade" id="tambah_modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="<?= base_url('prestasi_be/tambah') ?>" enctype="multipart/form-data" method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Tambah Prestasi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="type" class="form-label">Nama Siswa</label>
                                        <input type="text" id="nama_siswa" name="nama_siswa" class="form-control" placeholder="Enter nama siswa" />
                                        <?= form_error('nama_siswa', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-3">
                                        <label for="type" class="form-label">Kelas</label>
                                        <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Enter nama siswa" />
                                        <?= form_error('kelas', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-3">
                                        <label for="type" class="form-label">Nama Prestasi</label>
                                        <input type="text" id="nama_prestasi" name="nama_prestasi" class="form-control" placeholder="Enter nama siswa" />
                                        <?= form_error('nama_prestasi', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-3">
                                        <label for="type" class="form-label">Tingkat Prestasi</label>
                                        <input type="text" id="tingkat_prestasi" name="tingkat_prestasi" class="form-control" placeholder="Enter nama siswa" />
                                        <?= form_error('tingkat_prestasi', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col mb-3">
                                        <label for="type" class="form-label">Tahun Prestasi</label>
                                        <input type="number" id="tahun_prestasi" name="tahun_prestasi" class="form-control" placeholder="Enter nama siswa" />
                                        <?= form_error('tahun_prestasi', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                </div>

                                <div class="row g-2">
                                    <div class="col mb-3">
                                        <label for="foto" class="form-label">Upload File Foto</label>
                                        <input type="file" id="foto" name="foto" class="form-control" accept="image/*" />
                                        <small class="text-muted">File Berupa JPG, JPEG, PNG, & MAX. 10 MB</small>
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


        </div>




    </div>
    <!--/ Responsive Table -->
</div>
<!-- / Content -->