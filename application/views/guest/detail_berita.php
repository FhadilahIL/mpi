<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/sb-admin-2.css'); ?>">

    <title>Detail Berita Guest</title>
</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('guest') ?>">SIMPEG</a>
            <a class="btn btn-primary login-guest" href="<?= base_url('guest/login_page') ?>">Login</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="judul-berita-guest"><?= $tampil_berita->judul_berita ?></h1>
        <img class="gambar-berita-guest" src="<?= base_url('assets/img/berita/') . $tampil_berita->nama_gambar ?>" alt="berita">
        <p class="mt-3">Posted by <?= $tampil_berita->nama ?></p>
        <p><?= date('D, d F Y', strtotime($tampil_berita->tanggal)) ?></p>
        <p class="isi-berita-guest"><?= $tampil_berita->isi_berita ?></p>
    </div>

    <!-- Footer -->
    <footer class="sticky-footer bg-dark text-light fixed-bottom">
        <div class="copyright text-center">
            <span>Copyright &copy; SIMPEG 2019 || Designed By Muhammad Ilham Fhadilah</span>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery-3.2.1.slim.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>