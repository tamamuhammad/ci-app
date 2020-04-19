<!DOCTYPE html>
<html lang="en"><head>
    <title>Detail Mahasiswa</title>
</head><body>
    <h3>Detail <?= $mahasiswa['nama'] ?></h3>
    <hr>
    <ul>
        <li>Nama : <?= $mahasiswa['nama'] ?></li>
        <li>Email : <?= $mahasiswa['email'] ?></li>
        <li>No. Telp : <?= $mahasiswa['hp'] ?></li>
        <li>Jurusan : <?= $mahasiswa['jurusan'] ?></li>
    </ul>
</body></html>