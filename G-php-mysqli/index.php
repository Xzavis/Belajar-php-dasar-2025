<?php
// connect database php
require "Functions.php";

$mahasiswa = query ("SELECT * FROM mahasiswa");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>

    <table border="1" cellpadding="10" cellspacing="0">
        <h1>Daftar Mahasiswa</h1>
        <tr>
            <th>No.</th>
            <th>ID Mahasiswa</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <!-- variable i bertambah seiring while berjalan -->
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row): ?>
            <tr>
                <td style="text-align: center;"><b> <?= $i ?> </b></td>
                <td style="text-align: center;"> <?= $row["id"]?> </td>
                <td>
                    <a href="">Update</a>
                    |
                    <a href="">Delete</a>
                </td>
                <td><img width="50px" height="50px" src="img/<?= $row["gambar"]  ?>" alt=""></td>
                <td><?= $row["nrp"]?></td>
                <td><?= $row["nama"]?></td>
                <td><?= $row["email"]?></td>
                <td><?= $row["jurusan"]?></td>
            </tr>
            <?php $i++?>
        <?php endforeach; ?>
    </table>
</body>

</html>