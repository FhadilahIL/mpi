
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/sb-admin-2.css'); ?>">

    <title>Home SIMPEG</title>
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
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            
                <div class="carousel-inner">
                    <?php foreach ($berita_carousel as $carousel) { ?>
                    <div class="carousel-item">
                        <a href="<?= base_url('guest/detail_berita/') . $carousel->id_berita ?>"><img class="d-block w-100 carousel-berita" src="<?= base_url('assets/img/berita/') . $carousel->nama_gambar_berita ?>" alt="First slide"></a>
                    </div>
                    <?php } ?>
                </div>
            
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <h2 class="mt-4">Related News</h2>
        <div class="row isi-berita-guest">
            <?php foreach ($berita_related as $data_berita) { ?>
                <div class="col-4">
                    <div class="card">
                        <a href="<?= base_url('guest/detail_berita/') . $data_berita->id_berita ?>"><img class="card-img-top" src="<?= base_url('assets/img/berita/') . $data_berita->nama_gambar_berita ?>" alt="Card image cap"></a>
                        <p class="card-title text-center pt-3"><?= $data_berita->judul_berita ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="sticky-footer bg-dark text-light fixed-bottom">
        <div class="copyright text-center">
            <span>Copyright &copy; SIMPEG <?= date('Y') ?> || Designed By Muhammad Ilham Fhadilah</span>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery-3.2.1.slim.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script>
        $('.carousel-item:first').addClass("active");
        let a = $('.carousel')
        a.carousel({
            interval: 3000
        });
    </script>
</body>

</html>