<div class="container mt-5">
    <div class="flashdata" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
    <div class="header">
        <h1 class="mt-4">DAFTAR MAHASISWA</h1>
    </div>
    <hr class="mb-4">
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="col-6">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Mahasiswa .." name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-outline-success" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
                <a href="<?= base_url(); ?>mahasiswa/tambah/" class="btn btn-info w-100">Tambah Mahasiswa</a>
            </div>
            <div class="col-6">
                <?php if( empty($mahasiswa) ): ?>
                <div class="alert alert-danger my-2">Data Tidak Ditemukan</div>
                <?php endif; ?>
                <div class="list-group list-group-flush mt-4">
                <?php foreach ($mahasiswa as $mhs): ?>
                    <button class="list-group-item list-group-item-action buton p-0" data-target="#pencet">
                        <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" id="pencet"><?= $mhs['nama'] ?>
                            <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger tombol-hapus">Hapus</a>
                            <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id'] ?>" class="badge badge-warning">Edit</a>
                        </a>
                    </button>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
