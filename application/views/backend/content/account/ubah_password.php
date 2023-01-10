<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master /</span> Account Ubah Password</h4>


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
                        <h5>Ubah Password Akun</h5>

                    </div>
                </div>
            </div>


            <div class="card-body">
                <form action="" method="post">

                    <div class="row">
                        <div class="col mb-3">
                            <label for="kode" class="form-label">Password</label>
                            <input type="hidden" id="id" name="id" readonly value="<?= $akun_id['id'] ?>" class="form-control" placeholder="Enter Kode" />
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" />
                            <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="passwordconfirm" class="form-label">Password Confirmation</label>
                            <input type="password" id="passwordconfirm" name="passwordconfirm" class="form-control" placeholder="Enter password confirm" />
                            <?= form_error('passwordconfirm', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>


                    <div class="float-end">
                        <a href="<?= base_url('account') ?>" class="btn btn-secondary mt-2">Cancel</a>
                        <button type="submit" class="btn btn-primary mt-2">Ubah Password</button>
                    </div>


                </form>
            </div>




        </div>
        <!--/ Basic Bootstrap Table -->


    </div>
    <!--/ Responsive Table -->
</div>
<!-- / Content -->