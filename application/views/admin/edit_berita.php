        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Ubah Berita</h1>
            </div>
            <form action="<?= base_url('admin/edit_berita') ?>" method="post">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="<?= $lihat_berita->id_berita ?>">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" name="judul" value="<?= $lihat_berita->judul_berita ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Isi Berita</label>
                    <textarea type="text" class="form-control" rows="5" name="isi"><?= $lihat_berita->isi_berita ?></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1">Pilih Gambar</label>
                    <input type="file" class="form-control-file" name="gambar">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block">Update and Publish</button>
                </div>
            </form>
            <!-- Content Row -->

        </div>
        <!-- /.container-fluid -->