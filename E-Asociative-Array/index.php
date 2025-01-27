<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>
<style>
    .kotak {
        height: 30px;
        width: 30px;
        background-color: #BADA55;
        text-align: center;
        line-height: 30px;
        margin: 3px;
        float: left;
        transition: all 400ms ease-in
    }

    .kotak:hover {
        transform: rotate(360deg);
        border-radius: 50%;
    }
</style>

<body>

    <?php $numbers = [1, 2, 3, 4, 5, 6]; ?>
    <?php $angka = [
        [1, 2, 3],
        [4, 5, 6],
        [6, 7, 8],
    ]; ?>

    <?php foreach ($numbers as $number): ?>
        <div class="kotak">
            <?= $number ?>
        </div>
    <?php endforeach ?>

    <!-- 
    kita mencari angka 7 yang 
    mana array yang bernama 
    angka memiliki array
    di dalamnya
    -->
    <p class="kotak"><?= $angka[2][1] ?></p>

    <br>
    <br>
    <br>


    <?php
    // membuat data array Associative siswa dan menampilkannya
    // dalam bentuk list

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

    <?php foreach ($mahasiswa as $mhs) : ?>

        <ul>
            <li><img width="30px" height="30px" border="1px" src="image/<?= $mhs["Gambar"]?>" ></li>
            <li>Name: <?= $mhs["Name"] ?> </li>
            <li>Tlp: <?= $mhs["Tlp"] ?></li>
            <li>Jurusan: <?= $mhs["Jurusan"] ?></li>
            <li>Kelas: <?= $mhs["Kelas"] ?></li>
            <li>Sekolah: <?= $mhs["Sekolah"] ?></li>
        </ul>

    <?php endforeach ?>
</body>

</html>