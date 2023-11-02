<!DOCTYPE html>
<html>
    <style>
        body{
            margin: 25 auto;
        }
    </style>
<head>
    <title>Hasil Submit Form</title>
</head>
<body>
    <h2>Data yang Di-Submit:</h2>
    <p>Nama: <?= $nama ?></p>
    <p>NIS: <?= $nis ?></p>
    <p>Kelas: <?= $kelas ?></p>
    <p>Tanggal Lahir: <?= $tanggal_lahir ?></p>
    <p>Tempat Lahir: <?= $tempat_lahir ?></p>
    <p>Alamat: <?= $alamat ?></p>
    <p>Jenis Kelamin: <?= $jenis_kelamin ?></p>
    <p>Agama: <?= $agama ?></p>

    <a href="<?= base_url('index.php/siswa') ?>">Kembali ke Form Input</a>
</body>
</html>
