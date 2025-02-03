<?php

// 
require 'Functions.php';

// cek apakah tombol submit sudah di pencet?
if (isset($_POST["submit"])) {
    //    Cek apakah data sudah ditambahkan atau tidak
    if(addData($_POST) > 0){
        echo "
        <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo 
        "
        <script>
            alert('Data Gagal Ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data mahasiswa</title>
</head>

<body>
    <h1>tambah data mahasiswa</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="nrp">NRP: </label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">
                    Tambahan Data!
                </button>
            </li>
        </ul>
    </form>
</body>

</html>