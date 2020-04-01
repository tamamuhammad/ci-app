<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card text-center">
                <div class="card-header">
                    Edit <?php $nama = explode(' ', $mahasiswa['nama']);
                $nama = reset($nama); echo $nama ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama :</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Moehammad Soekamtoe" value="<?= $mahasiswa['nama']; ?>">
                            <small class="text-danger"><?= form_error('nama') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="zansuk@gmail.com" value="<?= $mahasiswa['email']; ?>">
                            <small class="text-danger"><?= form_error('email') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                        <?php foreach($jurusan as $j): ?>
                            <?php if($j == $mahasiswa['jurusan']): ?>
                                <option value="<?= $j; ?>" selected><?= $j; ?></option>
                            <?php else : ?>
                                <option value="<?= $j; ?>"><?= $j; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                            </select>
                            <small class="text-danger"><?= form_error('jurusan') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="hp">HP</label>
                            <input type="text" class="form-control" id="hp" name="hp" placeholder="086969696969" value="<?= $mahasiswa['hp']; ?>">
                            <small class="text-danger"><?= form_error('hp') ?></small>
                        </div>
                        <a href="<?= base_url(); ?>mahasiswa" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-info" name="edit">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
