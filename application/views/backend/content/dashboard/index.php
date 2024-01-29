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
            <div class="col-lg-4 col-md-4 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="<?= base_url('assets/backend/') ?>img/icons/unicons/chart-success.png" alt="chart success" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Teams</span>
                                <h3 class="card-title mb-2"><?= $team_count ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="<?= base_url('assets/backend/') ?>img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded" />
                                    </div>
                                </div>
                                <span>Berita</span>
                                <h3 class="card-title text-nowrap mb-2"><?= $berita_count ?></h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="<?= base_url('assets/backend/') ?>img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                                    </div>
                                </div>
                                <span class="d-block mb-1">Kategori Berita</span>
                                <h3 class="card-title text-nowrap mb-2"><?= $kategori_count ?></h3>

                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img src="<?= base_url('assets/backend/') ?>img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-semibold d-block mb-1">Kategori</span>
                                <h3 class="card-title mb-2"><?= $count_kategori ?></h3>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <!-- Order Statistics -->

            <!-- Expense Overview -->

        </div>
    </div>
    <!-- / Content -->