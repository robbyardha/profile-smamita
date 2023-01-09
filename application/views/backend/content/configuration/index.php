<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configuration /</span> Profile</h4>


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

        <?php
        // var_dump($config_app);
        // die;
        ?>
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Logo</h5>
                        <img class="img-fluid" src="<?= base_url('assets/backend/img/logo_company/') . $config_app['logo'] ?>" alt="" srcset="">

                        <button class="btn btn-md btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#logo<?= $config_app['id'] ?>">Ubah Logo</button>

                        <!-- Modal LOGO -->
                        <div class="modal fade" id="logo<?= $config_app['id'] ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="<?= base_url('configuration/update_logo') ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Update Logo</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="desc" class="form-label">Logo Baru</label>
                                                    <input type="file" id="logo" name="logo" class="form-control" />
                                                    <input type="hidden" id="id" name="id" class="form-control" value="<?= $config_app['id'] ?>" />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-warning">Ubah Logo</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Modal LOGO -->

                    </div>
                </div>


                <div class="card mt-4">
                    <div class="card-body">
                        <h5>Foto Direktur</h5>
                        <img class="img-fluid" src="<?= base_url('assets/backend/img/foto_direktur/') . $direktur['img_direktur'] ?>" alt="<?= $direktur['nama_direktur'] ?>" srcset="">

                        <button class="btn btn-md btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#foto_direktur<?= $direktur['id'] ?>">Ubah Foto</button>

                        <!-- Modal LOGO -->
                        <div class="modal fade" id="foto_direktur<?= $direktur['id'] ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="<?= base_url('configuration/update_foto_direktur') ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Update Foto Direktur</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="desc" class="form-label">Foto Direktur Baru</label>
                                                    <input type="file" id="foto_direktur" name="foto_direktur" class="form-control" />
                                                    <input type="hidden" id="id" name="id" class="form-control" value="<?= $direktur['id'] ?>" />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-warning">Ubah Foto</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- End Modal LOGO -->
                    </div>
                </div>

            </div>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h5>Profile</h5>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Company</label>
                            <div class="col-sm-10">
                                <strong><?= $config_app['company'] ?></strong>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tentang</label>
                            <div class="col-sm-10">
                                <p style="text-align:justify ;"><?= $config_app['about'] ?></p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tagline</label>
                            <div class="col-sm-10">
                                <blockquote class="blockquote">
                                    <p><?= $config_app['tagline'] ?></p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">No. Tlp</label>
                            <div class="col-sm-10">
                                <p><?= $config_app['phone_number'] ?></p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <p><?= $config_app['email'] ?></p>
                            </div>
                        </div>
                        <button class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#modal_ubah<?= $config_app['id'] ?>">Ubah Data</button>


                        <!-- MODAL UPDATE DATA -->
                        <div class="modal fade" id="modal_ubah<?= $config_app['id'] ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="<?= base_url('configuration/update_data') ?>" method="post">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Update Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" id="id" name="id" class="form-control" value="<?= $config_app['id'] ?>" />
                                            <div class="row g-2">
                                                <div class="col mb-2">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" id="name" name="name" value="<?= $config_app['name'] ?>" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-2">
                                                    <label for="name" class="form-label">Company</label>
                                                    <input type="text" id="company" name="company" value="<?= $config_app['company'] ?>" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-2">
                                                    <label for="name" class="form-label">About</label>
                                                    <textarea class="form-control" name="about" id="about" cols="30" rows="10"><?= $config_app['about'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-2">
                                                    <label for="name" class="form-label">Phone Number</label>
                                                    <input type="text" id="phone_number" name="phone_number" value="<?= $config_app['phone_number'] ?>" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-2">
                                                    <label for="name" class="form-label">Email</label>
                                                    <input type="text" id="email" name="email" value="<?= $config_app['email'] ?>" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-2">
                                                    <label for="name" class="form-label">Tagline</label>
                                                    <input type="text" id="tagline" name="tagline" value="<?= $config_app['tagline'] ?>" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-warning">Ubah </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END MODAL UPDATE DATA -->

                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5>Detail Direktur</h5>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <strong><?= $direktur['nama_direktur'] ?></strong>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Kata Pengantar</label>
                            <div class="col-sm-10">
                                <p style="text-align:justify ;"><?= $direktur['kata_pengantar'] ?></p>
                            </div>
                        </div>

                        <button class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#modal_direktur<?= $direktur['id'] ?>">Ubah Data</button>
                    </div>

                    <!-- MODAL UPDATE DATA DIREKTUR -->
                    <div class="modal fade" id="modal_direktur<?= $direktur['id'] ?>" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <form action="<?= base_url('configuration/update_data_direktur') ?>" method="post">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel1">Update Data Direktur</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" id="id" name="id" class="form-control" value="<?= $direktur['id'] ?>" />
                                        <div class="row g-2">
                                            <div class="col mb-2">
                                                <label for="nama_direktur" class="form-label">Nama Direktur</label>
                                                <input type="text" id="nama_direktur" name="nama_direktur" value="<?= $direktur['nama_direktur'] ?>" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col mb-2">
                                                <label for="name" class="form-label">Kata Pengatar</label>
                                                <textarea name="kata_pengantar" id="kata_pengantar" cols="30" rows="10" class="form-control"><?= $direktur['kata_pengantar'] ?></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="submit" class="btn btn-warning">Ubah </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END MODAL UPDATE DATA DIREKTUR -->



                </div>



            </div>
        </div>

    </div>
    <!--/ Responsive Table -->
</div>
<!-- / Content -->