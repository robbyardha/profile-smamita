<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master /</span> Account Ubah </h4>


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
                        <h5>Ubah Akun</h5>

                    </div>
                </div>
            </div>


            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" id="id" name="id" readonly value="<?= $akun_id['id'] ?>" class="form-control" placeholder="Enter Kode" />

                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" id="nama" name="nama" value="<?= $akun_id['nama'] ?>" class="form-control" placeholder="Enter Nama" />
                            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" value="<?= $akun_id['username'] ?>" class="form-control" placeholder="Enter Username" />
                            <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" id="email" name="email" value="<?= $akun_id['email'] ?>" class="form-control" placeholder="Enter email" />
                            <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="role_id" class="form-label">Role</label>
                            <select name="role_id" id="role_id" class="form-control select2">
                                <option value="1" <?php if ($akun_id['role_id'] == 1) {
                                                        echo "selected";
                                                    } ?>>Administrator</option>
                                <option value="2" <?php if ($akun_id['role_id'] == 2) {
                                                        echo "selected";
                                                    } ?>>Humas</option>

                            </select>
                            <?= form_error('role_id', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>



                    <div class="float-end">
                        <a href="<?= base_url('account') ?>" class="btn btn-secondary mt-2">Cancel</a>
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