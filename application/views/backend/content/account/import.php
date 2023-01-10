<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Master /</span> Import Account</h4>


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
                        <h5>Import Account</h5>

                    </div>

                </div>
            </div>


            <div class="card-body">
                <!-- <form action="" method="post" enctype="multipart/form-data"> -->
                <!-- </form> -->
                <div class="row">
                    <div class="col-sm-10">
                        <a href="<?= base_url('access/account/download_xls_account') ?>" class="btn btn-success btn-md mr-1"><i class="fa fa-file-excel-o pr-1"></i>Download File Format Excel</a>
                    </div>
                    <?php echo form_open_multipart('access/account/import', array('name' => 'spreadsheet')); ?>
                    <br>
                    <?php
                    $rand = substr(md5(microtime()), rand(0, 26), 5);
                    // var_dump($rand);
                    // die;
                    ?>

                    <input type="hidden" name="token" id="token" value="<?= $rand ?>">
                    <input type="file" class="dropify" data-height="300" data-allowed-file-extensions="xls xlsx csv" name="upload_file"></input>
                    <br>
                    <div class="pt-1 d-flex justify-content-end">
                        <a href="<?= base_url('access/account') ?>" class="btn btn-secondary me-2">Batal</a>
                        <input type="submit" class="btn btn-primary btn-raised me-2" name="import"></input>
                    </div>
                    <?php echo form_close(); ?>
                </div>

            </div>


        </div>
        <!--/ Basic Bootstrap Table -->


    </div>
    <!--/ Responsive Table -->
</div>
<!-- / Content -->