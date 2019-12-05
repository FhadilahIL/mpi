<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
    </div>

    <!-- Content Row -->
    <form action="<?= base_url('admin/input_data') ?>" method="post">
        <div class="form-group">
            <label for="exampleInputNIK">NIK</label>
            <input type="text" name="nik" maxlength="16" class="form-control" placeholder="Enter your NIK">
        </div>
        <div class="form-group">
            <label for="exampleInputNama">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your Password">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextareaAlamat">Alamat</label>
            <textarea class="form-control" name="alamat" rows="5" placeholder="Enter Your Address"></textarea>
        </div>
        <div class="form-row mb-3">
            <div class="col-4">
                <label for="exampleFormControlTextareaAlamat">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                    <option value="L">Laki - Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="col-4">
                <label for="exampleFormControlTextareaAlamat">Pendidikan</label>
                <select class="form-control" name="pendidikan">
                    <option value="SMA">SMA</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
            <div class="col-4">
                <label for="exampleFormControlTextareaAlamat">Status Perkawinan</label>
                <select class="form-control" name="status">
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Menikah">Menikah</option>
                </select>
            </div>
        </div>
        <div class="form-row mb-3">
            <div class="col-4">
                <label for="exampleFormControlTextareaAlamat">Agama</label>
                <select class="form-control" name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select>
            </div>
            <div class="col-4">
                <label for="exampleFormControlTextareaAlamat">Jabatan</label>
                <select class="form-control" name="jabatan">
                    <?php foreach ($jabatan as $jabatan) { ?>
                        <option value="<?= $jabatan->id_jabatan ?>"><?= $jabatan->nama_jabatan ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-4">
                <label for="exampleFormControlTextareaAlamat">No. Handphone</label>
                <input type="text" name="no_telp" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
        </div>
    </form>
</div>
<!-- /.container-fluid -->