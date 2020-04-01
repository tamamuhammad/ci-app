<div class="container mt-3">
    <div class="row">
            <div class="col-sm mb-2">
                <h1>DAFTAR ORANG</h1><hr>
                <h5>Result: <?= $total_rows; ?></h5>
            </div>
            <div class="col-sm mt-4">
                <form action="<?= base_url('people'); ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Orang .." name="keyword" autofocus autocomplete="off">
                        <div class="input-group-append">
                            <input class="btn btn-outline-success" type="submit" name="submit" value="Cari">
                        </div>
                    </div>
                </form>
            </div>
        <table class="table">
            <thead>
                <th>#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
            </thead>
            <tbody>
            <?php if(empty($people)): ?>
            <tr>
                <td colspan="4"><div class="alert alert-danger" role="alert">Data Tidak Ditemukan</div></td>
            </tr>
            <?php endif; foreach($people as $p): ?>
                <th><?= ++$start; ?></th>
                <td><?= $p['nama'] ?></td>
                <td><?= $p['alamat'] ?></td>
                <td><?= $p['email'] ?></td>
            </tbody>
            <?php endforeach; ?>
        </table>
        <?= $this->pagination->create_links(); ?>
    </div>
</div>
