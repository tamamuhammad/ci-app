<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card text-center">
                <div class="card-header">
                    Tambah Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama :</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Moehammad Soekamtoe">
                            <small class="text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="zansuk@gmail.com">
                            <small class="text-danger"><?= form_error('email') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option>Teknik Kendaraan Ringan</option>
                                <option>Teknik Sepeda Motor</option>
                                <option>Teknik Komputer dan Jaringan</option>
                                <option>Rekayasa Perangkat Lunak</option>
                                <option>Busana Butik</option>
                            </select>
                            <small class="text-danger"><?= form_error('jurusan') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="hp">HP</label>
                            <input type="text" class="form-control" id="hp" name="hp" placeholder="086969696969">
                            <small class="text-danger"><?= form_error('hp') ?></small>
                        </div>
                        <a href="<?= base_url(); ?>mahasiswa" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-info" name="tambah">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
