<?php

$connect = mysqli_connect(
    hostname: "localhost",
    username: "root",
    password: "",
    database: "phpdasar",
);


// function query
function query($query)
{
    global $connect;
    $result = mysqli_query(mysql: $connect, query: $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $connect;

    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan =  htmlspecialchars($data["jurusan"]);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO mahasiswa VALUES (NULL,'$nama','$nrp','$email','$jurusan','$gambar')";
    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
};

function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah file ada gambar yang diupload
    if ($error === 4) {
        echo "<script>alert('Upload gambar terlebih dahulu');</script>";
        return false;
    };

    // pengecekan file yang diupload
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    // Memecah nama file menjadi beberapa array
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    // pengecekan string didalam array $ekstensiGambarValid
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Upload gambar ekstensi jpg, jpeg, png')</script>";
        return false;
    };

    // pengecekan ukuran file
    if ($ukuranFile >= 3000000) {
        echo "<script>alert('batas ukuran file 3MB')</script>";
        return false;
    };

    // Generate nama file random untuk gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    // var_dump($namaFileBaru); die;

    // pengecekan lolos semua pengecekan
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru );
    return $namaFileBaru;

};

function hapus($id)
{
    global $connect;
    mysqli_query($connect, "DELETE FROM mahasiswa WHERE id = $id");
}


function ubah($data)
{
    global $connect;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan =  htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    
    // pengecekan apakah user mengganti gambar atau tidak
    if($_FILES ["gambar"]["error"] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload(); 
    };


    $query = "UPDATE mahasiswa SET 
        nama = '$nama', 
        nrp = '$nrp',
        email = '$email', 
        jurusan = '$jurusan', 
        gambar = '$gambar'
        WHERE id = '$id'
    ";
    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
};

function cari($keyword)
{
    $query =  "SELECT * FROM mahasiswa
        WHERE 
        nama LIKE '%$keyword%' OR 
        nrp LIKE '%$keyword%' OR 
        email LIKE '%$keyword%' OR 
        jurusan LIKE '%$keyword%'
    ";
    return query($query);
}
