<?php

// 
require 'Functions.php';

// cek apakah tombol submit sudah di ubah datanya ?
if (isset($_POST["submit"])) {
    //    Cek apakah data sudah ditambahkan atau tidak
    if(ubah($_POST) > 0){
        echo "
        <script>
            alert('Data Berhasil Diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo 
        "
        <script>
            alert('Data Gagal Diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }

}

// Ambil data dari url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id ")[0];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data mahasiswa</title>
</head>

<body>
    <h1>Update data mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]?>">
        <ul>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="nrp">NRP: </label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs["nrp"] ?>" required>
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar: </label> <br>
                <img width="50px" height="50px" src="img/<?= $mhs['gambar']?>" alt=""> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button style="margin: 1.2rem 0;" type="submit" name="submit">
                    Update Data!
                </button>
            </li>
        </ul>
    </form>
</body>

</html>