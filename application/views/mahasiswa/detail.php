<div class="container">
    <div class="row">
        <div class="col-6">
        <div class="card mt-5">
            <div class="card-header">
                Detail <?php $nama = explode(' ', $mahasiswa['nama']);
                $nama = reset($nama); echo $nama ?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                <h6 class="card-text text-muted"><?= $mahasiswa['email'] . ' - ' . $mahasiswa['hp']; ?></h6>
                <p class="card-text"><?= $mahasiswa['jurusan']; ?></p>
                <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>