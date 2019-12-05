        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Card Dashboard -->
                <?php foreach ($card as $data) { ?>
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card" style="width: 100%">
                            <div class="card-body">
                                <h5 class="card-title"><?= $data[0]; ?></h5>
                                <p class="card-text"><?= $data[1]; ?> Orang</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!-- Content Row -->
                <div class="col-xl-12 col-md-12 mb-5 table-responsive-lg">
                    <div class="table-responsive-lg">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col" class="judul-berita-index">Judul Berita</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($berita as $news) { ?>
                                    <tr>
                                        <td scope="row"><?= $no++; ?></td>
                                        <td><?= $news->judul_berita; ?></td>
                                        <td><a class="btn btn-primary detail" href="<?= base_url('admin/detail_berita/' . $news->id_berita) ?>">Detail Berita</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- /.container-fluid -->