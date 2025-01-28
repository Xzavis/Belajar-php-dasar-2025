<?php

// $_GET
// $_GET["name"] = "Xza Abdul Malik Ibrahim";
// var_dump($_GET);

// kita juga bisa mengaksesnya dengan cara
// melakukannya di URL


$mahasiswa = [
    [
        "Gambar" => "pp1.jpg",
        "Name" => "Xza Abdul Malik Ibrahim",
        "Tlp" => "081924325235",
        "Jurusan" => "Rekayasa Perangkat Lunak",
        "Kelas" => "XII",
        "Sekolah" => "SMKN 6 Jakarta"
    ],
    [
        "Gambar" => "pp1.jpg",
        "Name" => "Farel Putra Hidayat",
        "Tlp" => "081924325235",
        "Jurusan" => "Pemasaran",
        "Kelas" => "XII",
        "Sekolah" => "SMKN 6 Jakarta"
    ],
    [
        "Gambar" => "pp2.png",
        "Name" => "Ghina Aulia",
        "Tlp" => "08123456789",
        "Jurusan" => "Desain Komunikasi Visual",
        "Kelas" => "XII",
        "Sekolah" => "SMKN 6 Jakarta"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .profile {
        display: flex;
        align-items: center;
        text-align: center;
        gap: 1.2rem;
        margin: 12px
    }
</style>

<body>
    <h4 margin="12px">Your Friends</h4>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <div class="profile">
            <img width="30px" height="30px" src="image/<?= $mhs["Gambar"] ?>">
            <a href="Get_Profile.php?nama= <?= $mhs['Name']; ?> & gambar=<?= $mhs['Gambar'];?> & jurusan=<?= $mhs['Jurusan'];?> & kelas=<?= $mhs['Kelas'];?> & sekolah=<?= $mhs['Sekolah'];?>">
                <?= $mhs["Name"] ?>
            </a>
        </div>
    <?php endforeach ?>
</body>

</html>