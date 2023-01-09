<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Published /</span> Banner Header</h4>
        <?php

        use Html2Text\Html2Text;
        ?>

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
                        <h5>Banner Header</h5>

                    </div>
                    <div class="col">
                        <div class="float-end">
                            <a href="" data-bs-toggle="modal" data-bs-target="#banner_add" class="btn btn-sm btn-primary">Tambah</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card-body">
                <div class="table-responsive text-nowrap py-2 px-2">
                    <table class="table table-striped dt-responsive datatables nowrap py-2 px-2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Banner</th>
                                <th>Action</th>

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
                            <?php foreach ($banner as $pn) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $pn['nama_banner'] ?></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#detail_modal<?= $pn['id'] ?>">Detail</a>
                                        <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#ubah_modal<?= $pn['id'] ?>">Ubah</a>
                                        <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapus_modal<?= $pn['id'] ?>">Hapus</a>
                                    </td>
                                </tr>


                                <!-- Modal Detail Banner -->
                                <div class="modal fade" id="detail_modal<?= $pn['id'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Detail Banner Header</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="type" class="form-label">Nama Banner</label>
                                                        <p><?= $pn['nama_banner'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="type" class="form-label">Image Banner</label>
                                                        <br>
                                                        <img src="<?= base_url('assets/backend/img/banner_header/') . $pn['img_banner'] ?>" alt="" srcset="" class="img-fluid">

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
                                <!-- End Modal Detail Banner -->



                                <!-- Modal Ubah Banner -->
                                <div class="modal fade" id="ubah_modal<?= $pn['id'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="<?= base_url('banner_header/ubah') ?>" method="post" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Ubah Banner Header</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label for="type" class="form-label">Nama Banner</label>
                                                            <input type="text" id="nama_banner" name="nama_banner" class="form-control" value="<?= $pn['nama_banner'] ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mb-3">
                                                            <label for="type" class="form-label">Image Banner</label>
                                                            <img src="<?= base_url('assets/backend/img/banner_header/') . $pn['img_banner'] ?>" alt="" srcset="" class="img-fluid">

                                                            <input type="file" id="img_banner" name="img_banner" class="form-control" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" id="id" name="id" class="form-control" placeholder="Enter ID" value="<?= $pn['id'] ?>" />
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-warning">Ubah </button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Modal Ubah Banner -->



                                <!-- Modal Hapus Banner-->
                                <div class="modal fade" id="hapus_modal<?= $pn['id'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="<?= base_url('banner_header/hapus') ?>" method="post">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Hapus Banner</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin menghapus data <b><?= $pn['nama_banner'] ?> ?</b> </p>

                                                    <p>Data yang dihapus tidak dapat dikembalikan.</p>
                                                    <br>
                                                    <img src="<?= base_url('assets/backend/img/banner_header/') . $pn['img_banner'] ?>" alt="" srcset="" class="img-fluid">
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

                            <!-- Modal Tambah Banner -->
                            <div class="modal fade" id="banner_add" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <form action="<?= base_url('banner_header/tambah') ?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1">Tambah Banner Header</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="type" class="form-label">Nama Banner</label>
                                                        <input type="text" id="nama_banner" name="nama_banner" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="type" class="form-label">Image Banner</label>
                                                        <input type="file" id="img_banner" name="img_banner" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-success">Tambah </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- End Modal Tambah Banner -->


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