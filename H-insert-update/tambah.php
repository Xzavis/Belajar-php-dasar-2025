<?php

// koneksi
$conn = mysqli_connect(hostname: "localhost", username: "root", password: "", database: "phpdasar");

// cek apakah tombol submit sudah di pencet?
if (isset($_POST["submit"])) {
    // ambil data dari setiap element didalam form
    // berdasarkan key name= ""
    var_dump($_POST);
    $nama = $_POST["nama"];
    $nrp = $_POST["nrp"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    // menampilkan data menggunakan query
    $insertQuery = "INSERT INTO mahasiswa
        VALUES 
            (NULL, '$nama', '$nrp', '$email', '$jurusan', '$gambar') 
        ";
    mysqli_query($conn, $insertQuery);
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