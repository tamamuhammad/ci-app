<div class="container mt-3">
    <div class="flashdata" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
    <div class="header">
        <h1 class="mt-4">DAFTAR MAHASISWA</h1>
    </div>
    <hr>
</div>
<div class="container mt-4 px-0">
    <div class="row">
        <div class="col-12 px-0">
            <div class="col-8 d-flex">
                <div class="col-6">
                    <a href="<?= base_url(); ?>mahasiswa/tambah/" class="btn btn-info w-75 float-right"><i class="fas fa-user-plus mr-3"></i>Tambah Mahasiswa</a>
                </div>
                <div class="col-6">
                    <a href="<?= base_url(); ?>mahasiswa/tambah/" class="btn btn-success w-75 float-left"><i class="fas fa-file-excel mr-3"></i>Export Excel</a>
                </div>
            </div>
            <div class="col-12 d-flex">
                <div class="col-8">
                    <?php if (empty($mahasiswa)) : ?>
                        <div class="alert alert-danger my-2">Data Tidak Ditemukan</div>
                    <?php endif; ?>
                    <div class="list-group list-group-flush mt-4">
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <button class="list-group-item list-group-item-action buton p-0" data-target="#pencet">
                                <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" id="pencet"><?= $mhs['nama'] ?>
                                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash-alt"></i></a>
                                    <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id'] ?>" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="<?= base_url(); ?>mahasiswa/pdf/<?= $mhs['id'] ?>" class="btn btn-warning"><i class="fas fa-file-pdf"></i></a>
                                </a>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-4 text-center mt-4">
                    <h3>KOLOM PENCARIAN</h3>
                    <hr>
                    <p class="text-muted pt-3" style="font-size: 75%">Pencarian ini berdasarkan nama, email, kelas, jurusan maupun nomor hp Mahasiswa yang tercantum dalam sistem ini</p>
                    <form action="" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari Mahasiswa .." name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-outline-success" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>