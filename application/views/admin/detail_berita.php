        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $lihat->judul_berita ?></h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-11 col-md-11 mb-4">
                    <img class="gambar-berita" src="<?= base_url('assets/img/berita/') . $lihat->nama_gambar_berita ?>" alt="">
                </div>
                <div class="col-xl-11 col-md-11 mb-4">
                    <p>Posted By <?= $lihat->nama ?></p>
                    <p><?= $lihat->tanggal ?></p>
                    <p><?= $lihat->isi_berita ?></p>
                </div>
                <!-- Content Row -->
            </div>
        </div>
        <!-- /.container-fluid -->