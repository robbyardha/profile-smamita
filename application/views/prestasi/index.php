<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
</div>



<!-- EXAMPLE -->
<div class="main">


    <?php if ($prestasi != null) : ?>
        <h1>Prestasi</h1>
        <ul class="cards">
            <?php foreach ($prestasi as $sf) : ?>
                <li class="cards_item">
                    <div class="card">
                        <div class="card_image"><img class="sized-img-500x300" src="<?= base_url('assets/file_upload/kesiswaan/prestasi/') . $sf['foto'] ?>"></div>
                        <div class="card_content">
                            <h2 class="card_title"><?= $sf['nama_siswa'] ?></h2>
                            <p class="card_text"><?= $sf['nama_prestasi'] ?> | <?= $sf['tingkat_prestasi'] ?></p>
                        </div>
                    </div>
                </li>
            <?php endforeach ?>
        </ul>
    <?php else : ?>

        <h1 class="my-5">Maaf Prestasi Masih Kosong</h1>
    <?php endif; ?>
</div>
<style>
    /* Font */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

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
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        letter-spacing: 0;
    }

    .main {
        max-width: 1200px;
        margin: 0 auto;
    }

    h1 {
        font-size: 24px;
        font-weight: bold;
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
        background: #FF8B13;
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

    .sized-img-500x300 {
        width: 500px;
        height: 300px;
    }
</style>