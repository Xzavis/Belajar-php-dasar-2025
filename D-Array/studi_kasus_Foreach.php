<?php

$siswa = [
    [
        "Xza Abdul Malik Ibrahim",
        "081924325235",
        "Rekayasa Perangkat Lunak",
        "XII",
        "SMKN 6 Jakarta"
    ],

    [
        "Farel Putra Hidayat",
        "081924325235",
        "Rekayasa Perangkat Lunak",
        "XII",
        "SMKN 6 Jakarta"
    ],


];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>

<body>
    <?php foreach ($siswa as $dataSiswa) : ?>
        <ul style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
            <li><b>Nama: </b><?= $dataSiswa[0] ?></li>
            <li><b>no tlp: </b><?= $dataSiswa[1] ?></li>
            <li><b>Jurusan: </b><?= $dataSiswa[2] ?></li>
            <li><b>Kelas: </b><?= $dataSiswa[3] ?></li>
            <li><b>Sekolah: </b><?= $dataSiswa[4] ?></li>
        </ul>
    <?php endforeach ?>
</body>

</html>