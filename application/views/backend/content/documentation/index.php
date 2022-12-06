<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Documentation /</span> Guide Page</h4>


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
                        <h5>Documentation</h5>

                    </div>

                </div>
            </div>


            <div class="card-body">
                <h6 class="text-muted">Basic</h6>
                <div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-deskripsi" aria-controls="navs-deskripsi" aria-selected="false">
                                Deskripsi
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-proses" aria-controls="navs-proses" aria-selected="false">
                                Proses Sistem
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab" data-bs-target="#navs-kategori" aria-controls="navs-kategori" aria-selected="true">
                                Kategori Buku
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab" data-bs-target="#navs-penerbit" aria-controls="navs-penerbit" aria-selected="true">
                                Penerbit Buku
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab" data-bs-target="#navs-pencetak" aria-controls="navs-pencetak" aria-selected="true">
                                Pencetak Buku
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab" data-bs-target="#navs-buku" aria-controls="navs-buku" aria-selected="true">
                                List Buku
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link " role="tab" data-bs-toggle="tab" data-bs-target="#navs-config" aria-controls="navs-config" aria-selected="true">
                                Konfigurasi
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="navs-deskripsi" role="tabpanel">
                            <p>
                                Deskripsi Sistem
                            </p>
                            <p class="mb-0">
                                Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon
                                jelly-o jelly-o ice cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow
                                jujubes sweet.
                            </p>
                        </div>

                        <div class="tab-pane fade" id="navs-proses" role="tabpanel">
                            <p>
                                Proses Sistem
                            </p>
                            <p class="mb-0">
                                Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
                                cotton candy liquorice caramels.
                            </p>
                        </div>

                        <div class="tab-pane fade" id="navs-kategori" role="tabpanel">
                            <p>
                                Cara Penggunaan Kategori
                            </p>
                            <p class="mb-0">
                                Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                                roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                                jelly-o tart brownie jelly.
                            </p>
                        </div>

                        <div class="tab-pane fade" id="navs-penerbit" role="tabpanel">
                            <p>
                                Fungsi Penerbit
                            </p>
                            <p class="mb-0">
                                Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                                roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                                jelly-o tart brownie jelly.
                            </p>
                        </div>

                        <div class="tab-pane fade" id="navs-pencetak" role="tabpanel">
                            <p>
                                Fungsi Pencetak
                            </p>
                            <p class="mb-0">
                                Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                                roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                                jelly-o tart brownie jelly.
                            </p>
                        </div>

                        <div class="tab-pane fade" id="navs-buku" role="tabpanel">
                            <p>
                                Fungsi buku
                            </p>
                            <p class="mb-0">
                                Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                                roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                                jelly-o tart brownie jelly.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="navs-config" role="tabpanel">
                            <p>
                                Fungsi Config
                            </p>
                            <p class="mb-0">
                                Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                                roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                                jelly-o tart brownie jelly.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">

                </div>
            </div>

        </div>
        <!--/ Basic Bootstrap Table -->


    </div>
    <!--/ Responsive Table -->
</div>
<!-- / Content -->