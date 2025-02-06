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

function addData($data)
{
    global $connect;
    $nama = htmlspecialchars($data["nama"]);
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan =  htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // menampilkan data menggunakan query
    // $insertQuery = "INSERT INTO mahasiswa
    //     VALUES 
    //         ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar') 
    //     ";
    $query = "INSERT INTO mahasiswa VALUES (NULL,'$nama','$nrp','$email','$jurusan','$gambar')";
    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}

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
    $gambar = htmlspecialchars($data["gambar"]);

    // menampilkan data menggunakan query
    // $insertQuery = "INSERT INTO mahasiswa
    //     VALUES 
    //         ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar') 
    //     ";
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
