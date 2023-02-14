<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
<!-- End of breadcurmb section
        ============================================= -->

<!-- Start of team section
        ============================================= -->
<section id="sa-team-inner" class="sa-team-inner-section inner-page-padding mt-4">
    <div class="container">
        <div class="sa-team-=inner-contenb">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <h4 class="poppins-bold text-center">Profile</h4>
                        <div class="mb-3">
                            <label for="tentang" class="form-label">Profile</label>
                            <p id="tentang" class="poppins-regular"><?= $get_profile['nama_kurikulum'] ?></p>
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <p class="poppins-regular"><?= $get_profile['deskripsi_kurikulum'] ?></p>
                        </div>
                    </div>

                    <br>

                    <div class="card" style="height: 83rem;">
                        <!-- <div class="card" style="height: 83rem;"> -->
                        <h4 class="poppins-bold text-center">Program Kerja</h4>
                        <iframe class="responsive-iframe" control src="<?= base_url('assets/file_upload/kurikulum/profile/') . $get_profile['program_kerja'] ?>" title="Program Kerja" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <!-- <div class="card" style="height: 100rem;"> -->
                        <h4 class="poppins-bold text-center">Struktur</h4>
                        <br>
                        <table class="table table-primary">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Bagian</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($get_struktur as $getstruk) : ?>
                                    <tr>
                                        <td><?= $getstruk['nama'] ?></td>
                                        <td><?= $getstruk['divisi'] ?></td>
                                        <td>
                                            <img height="150" width="150" src="<?= base_url('assets/file_upload/kurikulum/struktur/') . $getstruk['foto'] ?>" alt="" srcset="">
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</section>


<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins';
    }

    /* Float four columns side by side */
    .column {
        float: left;
        width: 25%;
        padding: 0 10px;
    }

    /* Remove extra left and right margins, due to padding */
    .row {
        margin: 0 -5px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
    }

    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        /* text-align: center; */
        background-color: #f1f1f1;
    }


    @font-face {
        font-family: Poppins;
        src: url(assets/Poppins/Poppins-Regular.ttf);
    }

    .poppins-regular {
        font-family: 'Poppins';
    }

    .poppins-bold {
        font-family: 'Poppins';
        font-weight: bold;
    }

    .responsive-iframe {
        /* position: absolute; */
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
    }
</style>
















<!-- EXAMPLE -->
<!-- <div class="main">
    <h1>Responsive Card Grid Layout</h1>
    <ul class="cards">
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="https://picsum.photos/500/300/?image=10"></div>
                <div class="card_content">
                    <h2 class="card_title">Card Grid Layout</h2>
                    <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                    <button class="btn card_btn">Read More</button>
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
                <div class="card_content">
                    <h2 class="card_title">Card Grid Layout</h2>
                    <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                    <button class="btn card_btn">Read More</button>
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="https://picsum.photos/500/300/?image=11"></div>
                <div class="card_content">
                    <h2 class="card_title">Card Grid Layout</h2>
                    <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                    <button class="btn card_btn">Read More</button>
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="https://picsum.photos/500/300/?image=14"></div>
                <div class="card_content">
                    <h2 class="card_title">Card Grid Layout</h2>
                    <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                    <button class="btn card_btn">Read More</button>
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="https://picsum.photos/500/300/?image=17"></div>
                <div class="card_content">
                    <h2 class="card_title">Card Grid Layout</h2>
                    <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                    <button class="btn card_btn">Read More</button>
                </div>
            </div>
        </li>
        <li class="cards_item">
            <div class="card">
                <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
                <div class="card_content">
                    <h2 class="card_title">Card Grid Layout</h2>
                    <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                    <button class="btn card_btn">Read More</button>
                </div>
            </div>
        </li>
    </ul>
</div>

<h3 class="made_by">Made with ♡</h3>
<style>
    /* Font */
    @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

    /* Design */
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    html {
        background-color: #ecf9ff;
    }

    body {
        color: #272727;
        font-family: 'Quicksand', serif;
        font-style: normal;
        font-weight: 400;
        letter-spacing: 0;
        padding: 1rem;
    }

    .main {
        max-width: 1200px;
        margin: 0 auto;
    }

    h1 {
        font-size: 24px;
        font-weight: 400;
        text-align: center;
    }

    img {
        height: auto;
        max-width: 100%;
        vertical-align: middle;
    }

    .btn {
        color: #ffffff;
        padding: 0.8rem;
        font-size: 14px;
        text-transform: uppercase;
        border-radius: 4px;
        font-weight: 400;
        display: block;
        width: 100%;
        cursor: pointer;
        border: 1px solid rgba(255, 255, 255, 0.2);
        background: transparent;
    }

    .btn:hover {
        background-color: rgba(255, 255, 255, 0.12);
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .cards_item {
        display: flex;
        padding: 1rem;
    }

    @media (min-width: 40rem) {
        .cards_item {
            width: 50%;
        }
    }

    @media (min-width: 56rem) {
        .cards_item {
            width: 33.3333%;
        }
    }

    .card {
        background-color: white;
        border-radius: 0.25rem;
        box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .card_content {
        padding: 1rem;
        background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%);
    }

    .card_title {
        color: #ffffff;
        font-size: 1.1rem;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: capitalize;
        margin: 0px;
    }

    .card_text {
        color: #ffffff;
        font-size: 0.875rem;
        line-height: 1.5;
        margin-bottom: 1.25rem;
        font-weight: 400;
    }

    .made_by {
        font-weight: 400;
        font-size: 13px;
        margin-top: 35px;
        text-align: center;
    }
</style> -->