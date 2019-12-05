        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Berita</h1>
            </div>
            <form action="<?= base_url('admin/input_news') ?>" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Berita</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Isi Berita</label>
                    <textarea type="text" class="form-control" rows="5" name="isi"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1">Pilih Gambar</label>
                    <input type="file" class="form-control-file" name="gambar">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block">Publish</button>
                </div>
            </form>
            <!-- Content Row -->

        </div>
        <!-- /.container-fluid -->