<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
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
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">

                <?php
                date_default_timezone_set('Asia/Jakarta');
                $currenttime = new DateTime();

                //initialization dini
                $startdini = new DateTime('00:00:00');
                $enddini = new DateTime('03:59:00');

                //initialization pagi
                $startpagi = new DateTime('03:59:60');
                $endpagi = new DateTime('11:59:00');

                //init siang
                $startsiang = new DateTime('12:00:00');
                $endsiang = new DateTime('14:59:00');

                //init sore
                $startsore = new DateTime('15:00:00');
                $endsore = new DateTime('18:59:00');
                //init malam
                $startmalam = new DateTime('19:00:00');
                $endmalam = new DateTime('23:59:60');
                ?>


                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Welcome <?= $this->session->userdata('nama') ?>! 🎉</h5>
                                <p class="mb-4">
                                    <?php if ($currenttime >= $startdini && $currenttime <= $enddini) : ?>
                                        Don't Forget To take a rest! ❤️ 💤
                                    <?php elseif ($currenttime >= $startpagi && $currenttime <= $endpagi) : ?>
                                        Good Morning 🌄
                                    <?php elseif ($currenttime >= $startsiang && $currenttime <= $endsore) : ?>
                                        Good Afternoon 👨‍💻
                                    <?php elseif ($currenttime >= $startmalam && $currenttime <= $endmalam) : ?>
                                        Good Night 🌃
                                    <?php endif ?>
                                </p>


                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="<?= base_url('assets/backend/') ?>img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5>Ubah Password</h5>
                        <a href="" class="btn btn-md btn-info" data-bs-toggle="modal" data-bs-target="#ubah_pass">Ubah Password</a>
                    </div>

                    <div class="modal fade" id="ubah_pass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="<?= base_url('auth/update_password_account') ?>" method="POST">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Password Akun</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="new_pass" class="form-label">Password Baru</label>
                                            <input type="password" class="form-control" id="new_pass" name="new_pass">
                                        </div>
                                        <div class="mb-3">
                                            <label for="new_pass_confirm" class="form-label">Password Baru Konfirmasi</label>
                                            <input type="password" class="form-control" id="new_pass_confirm" name="new_pass_confirm">
                                            <input type="hidden" class="form-control" id="akun_id" name="akun_id" value="<?= $this->session->userdata('akun_id') ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->