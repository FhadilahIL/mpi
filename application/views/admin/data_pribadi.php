    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pribadi</h1>
        </div>

        <!-- Content Row -->
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

        <form action="<?= base_url('admin/update_data') ?>" method="post">
            <div class="form-group">
                <label for="exampleInputNIK">NIK</label>
                <input type="text" name="nik" class="form-control" id="exampleInputNIK" placeholder="Enter your NIK" value="<?= $this->session->userdata('nik'); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputNama">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="exampleInputNama" placeholder="Masukan Nama Lengkap" value="<?= $user->nama; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Enter your Email" value="<?= $user->email; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="" value="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextareaAlamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextareaAlamat" rows="5"><?= $user->alamat; ?></textarea>
            </div>
            <div class="form-row mb-3">
                <div class="col-4">
                    <label for="exampleFormControlTextareaAlamat">Jenis Kelamin</label>
                    <select id="inputState" class="form-control" name="jenis_kelamin">
                        <option <?= $jenis_kelamin[0] ?> value="L">Laki - Laki</option>
                        <option <?= $jenis_kelamin[1] ?> value="P">Perempuan</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="exampleFormControlTextareaAlamat">Pendidikan</label>
                    <select id="inputState" class="form-control" name="pendidikan">
                        <option <?= $pendidikan[0] ?> value="SMA">SMA</option>
                        <option <?= $pendidikan[1] ?> value="D3">D3</option>
                        <option <?= $pendidikan[2] ?> value="D4">D4</option>
                        <option <?= $pendidikan[3] ?> value="S1">S1</option>
                        <option <?= $pendidikan[4] ?> value="S2">S2</option>
                        <option <?= $pendidikan[5] ?> value="S3">S3</option>
                    </select>
                </div>
                <div class="col-4">
                    <label for="exampleFormControlTextareaAlamat">Status Perkawinan</label>
                    <select id="inputState" class="form-control" name="status">
                        <option <?= $status[0] ?> value="Belum Menikah">Belum Menikah</option>
                        <option <?= $status[1] ?> value="Menikah">Menikah</option>
                    </select>
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="col-6">
                    <label for="exampleFormControlTextareaAlamat">Agama</label>
                    <select id="inputState" class="form-control" name="agama">
                        <option <?= $agama[0] ?> value="Islam">Islam</option>
                        <option <?= $agama[1] ?> value="Kristen">Kristen</option>
                        <option <?= $agama[2] ?> value="Katholik">Katholik</option>
                        <option <?= $agama[3] ?> value="Hindu">Hindu</option>
                        <option <?= $agama[4] ?> value="Budha">Budha</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="exampleFormControlTextareaAlamat">No. Handphone</label>
                    <input type="text" name="no_telp" class="form-control" id="inputNoHp" value="<?= $user->no_telp ?>">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </div>
        </form>
    </div>
    <!-- /.container-fluid -->