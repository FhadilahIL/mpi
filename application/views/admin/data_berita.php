        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Berita</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <div class="col">
                    <a class="btn btn-primary mb-3 tombol-tambah" href="<?= base_url('admin/tambah_berita') ?>">Tambah Berita</a>
                </div>

                <!-- Content Row -->

                <div class="col-xl-12 col-md-12 mb-5 table-responsive-lg">
                    <?php if ($this->session->flashdata('pesan_berhasil')) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!!!</strong> <?= $this->session->flashdata('pesan_berhasil') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } elseif ($this->session->flashdata('pesan_gagal')) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Failed!!!</strong> <?= $this->session->flashdata('pesan_gagal') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col" class="judul-berita">Judul Berita</th>
                                <th scope="col" class="tanggal-berita">Tanggal</th>
                                <th scope="col" class="author-berita">Author</th>
                                <th scope="col" class="keterangan">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($daftar_berita as $daftar) { ?>
                                <tr>
                                    <td scope="row"><?= $no++ . "." ?></td>
                                    <td><?= $daftar->judul_berita; ?></td>
                                    <td><?= $daftar->tanggal; ?></td>
                                    <td>Muhammad Ilham Fhadilah</td>
                                    <td><a class="btn btn-primary detail" href="<?= base_url('admin/detail_berita/' . $daftar->id_berita) ?>">Detail</a> <a class="btn btn-primary detail" href="<?= base_url('admin/ubah_berita/') . $daftar->id_berita ?>">Edit</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->