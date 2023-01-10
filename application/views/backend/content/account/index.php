<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master /</span> Account</h4>


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
                        <h5>Account</h5>

                    </div>
                    <div class="col">
                        <div class="float-end">
                            <!-- <a href="<?= base_url('account/import') ?>" class="btn btn-sm btn-success">Import</a> -->
                            <a href="<?= base_url('account/tambah') ?>" class="btn btn-sm btn-primary">Tambah</a>
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
                                <th>Nama</th>
                                <th>Role</th>
                                <th>Username</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <?php
                            $no = 1;
                            ?>
                            <?php foreach ($akun as $ak) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $ak['nama'] ?></td>
                                    <td>
                                        <?php if ($ak['role_id'] == 1) : ?>
                                            <?= "Administrator" ?>
                                        <?php elseif ($ak['role_id'] == 2) : ?>
                                            <?= "Humas" ?>
                                        <?php elseif ($ak['role_id'] == 3) : ?>
                                            <?= "Pemberita" ?>
                                        <?php elseif ($ak['role_id'] == 4) : ?>
                                            <?= "Siswa" ?>
                                        <?php elseif ($ak['role_id'] == 5) : ?>
                                            <?= "Wali Siswa" ?>
                                        <?php endif ?>
                                    </td>
                                    <td>
                                        <?= $ak['username'] ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('account/ubah_pass/') . $ak['id'] ?>" class="btn btn-sm btn-secondary">Change Password</a>
                                        <a href="<?= base_url('account/ubah/') . $ak['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapus_modal<?= $ak['id'] ?>">Hapus</a>
                                    </td>
                                </tr>


                                <!-- Modal Hapus -->
                                <div class="modal fade" id="hapus_modal<?= $ak['id'] ?>" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="<?= base_url('account/hapus') ?>" method="post">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel1">Hapus Account</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin menghapus data <b><?= $ak['nama'] ?> ?</b> </p>

                                                    <p>Data yang dihapus tidak dapat dikembalikan.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" id="id" name="id" class="form-control" placeholder="Enter ID" value="<?= $ak['id'] ?>" />
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