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
        <p><a href="tambah.php">+ Tambah data Mahasiwa</a></p>
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

        <!-- variable i bertambah 1 -->
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $data): ?>
            <tr>
                <td style="text-align: center;"><b> <?= $i ?> </b></td>
                <td style="text-align: center;"> <?= $data["id"]?> </td>
                <td>
                    <a href="update.php?id=<?= $data['id'] ?>">Update</a>
                    |
                    <a href="delete.php?id=<?= $data['id'] ?>" onclick="return confirm('Apakah anda ingin menghapus Data ID <?= $data['id']; ?>')">Delete</a>
                </td>
                <td><img width="50px" height="50px" src="img/<?= $data["gambar"]  ?>" alt=""></td>
                <td><?= $data["nrp"]?></td>
                <td><?= $data["nama"]?></td>
                <td><?= $data["email"]?></td>
                <td><?= $data["jurusan"]?></td>
            </tr>
            <?php $i++?>
        <?php endforeach; ?>
    </table>
</body>

</html>