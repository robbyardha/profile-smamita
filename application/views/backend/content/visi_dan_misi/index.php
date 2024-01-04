<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Configuration /</span> <?= $title ?></h4>


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
        <?php endif; ?>


        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Foto Visi Dan Misi</h5>
                        <img class="img-fluid" src="<?= base_url('assets/backend/img/foto_visi_dan_misi/') . $visi_misi['img_vision_mision'] ?>" alt="" srcset="">

                        <button class="btn btn-md btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#visi_dan_misi<?= $visi_misi['id'] ?>">Ubah Foto Visi Dan Misi</button>

                        <!-- Modal LOGO -->
                        <div class="modal fade" id="visi_dan_misi<?= $visi_misi['id'] ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="<?= base_url('visi_misi/update_logo_visi_dan_misi') ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Update Foto Visi Dan Misi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row g-2">
                                                <div class="col mb-0">
                                                    <label for="desc" class="form-label">Foto Baru</label>
                                                    <input type="file" id="logo" name="foto_visi_misi" class="form-control" />
                                                    <input type="hidden" id="id" name="id" class="form-control" value="<?= $visi_misi['id'] ?>" />
                                                    <input type="hidden" name="foto_visi_misi_lama" value="<?= $visi_misi['img_vision_mision'] ?>">
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
                        <h5><?= $title ?></h5>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Visi</label>
                            <div class="col-sm-10">
                                <strong><?= convertHtmlToText($visi_misi['vision'])  ?></strong>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Misi</label>
                            <div class="col-sm-10">
                                <p style="text-align:justify ;"><?= convertHtmlToText($visi_misi['mision'])  ?></p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Summary / 3 Pilar Utama</label>
                            <div class="col-sm-10">
                                <blockquote class="blockquote">
                                    <p><?= convertHtmlToText($visi_misi['summary'])  ?></p>
                                </blockquote>
                            </div>
                        </div>
                        <button class="btn btn-md btn-primary" data-bs-toggle="modal" data-bs-target="#modal_ubah_visi_misi<?= $visi_misi['id'] ?>">Ubah Data</button>


                        <!-- MODAL UPDATE DATA -->
                        <div class="modal fade" id="modal_ubah_visi_misi<?= $visi_misi['id'] ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <form action="<?= base_url('visi_misi/update_data') ?>" method="post">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel1">Update Data</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" id="id" name="id" class="form-control" value="<?= $visi_misi['id'] ?>" />
                                            <div class="col-12">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <label for="visi" class="form-label">Visi</label>
                                                        <textarea class="form-control ckeditor" name="visi" id="editor1" rows="3"><?= $visi_misi['vision'] ?></textarea>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="misi" class="form-label">Misi</label>
                                                        <textarea class="form-control ckeditor" name="misi" id="editor1" rows="5"><?= $visi_misi['mision'] ?></textarea>
                                                    </div>
                                                    <div class="col-mb-12 mt-3">
                                                        <label for="summary" class="form-label">Summary / 3 Pilar</label>
                                                        <textarea class="form-control ckeditor" name="summary" id="editor1" rows="8"><?= $visi_misi['summary'] ?></textarea>
                                                    </div>
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

    </div>
    <!--/ Responsive Table -->
</div>
<!-- / Content -->