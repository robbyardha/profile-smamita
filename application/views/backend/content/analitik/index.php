<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Analitik /</span> Traffic</h4>


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
                        <h5>Traffic</h5>

                    </div>
                    <div class="col">
                        <div class="float-end">
                        </div>
                    </div>
                </div>
            </div>


            <div class="card-body">
                <div>
                    <canvas id="myChart"></canvas>
                </div>

            </div>


        </div>
        <!--/ Basic Bootstrap Table -->


    </div>
    <!--/ Responsive Table -->
</div>
<!-- / Content -->

<?php
//Inisialisasi nilai variabel awal
$tanggal = "";
$jumlah = null;
foreach ($analitik as $gtf) {
    $tgl = $gtf['tanggal'];
    $tanggal .= "'$tgl'" . ", ";
    $jum = $gtf['total_tgl'];
    $jumlah .= "$jum" . ", ";
}
?>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            labels: [<?= $tanggal ?>],
            datasets: [{
                label: 'Data Traffic Website',
                // data: [12, 19, 3, 5, 2, 3],
                // backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)', 'rgb(175, 238, 239)'],
                // borderColor: ['rgb(255, 99, 132)'],
                data: [<?= $jumlah ?>],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>