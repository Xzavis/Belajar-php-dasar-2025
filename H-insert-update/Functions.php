<?php 

$connect = mysqli_connect(
    hostname: "localhost",
    username: "root",
    password: "",
    database:"phpdasar",
);


// function query
function query($query){
    global $connect;
    $result = mysqli_query(mysql: $connect, query: $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function addData($data){
    global $connect;
    $nama = $data["nama"];
    $nrp = $data["nrp"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $gambar = $data["gambar"];

    // menampilkan data menggunakan query
    // $insertQuery = "INSERT INTO mahasiswa
    //     VALUES 
    //         ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar') 
    //     ";
    $query = "INSERT INTO mahasiswa VALUES (NULL,'$nama','$nrp','$email','$jurusan','$gambar')";
    mysqli_query($connect,$query);
    return mysqli_affected_rows($connect);

}
