<?php 

$connect = mysqli_connect(
    hostname: "localhost",
    username: "root",
    password: "",
    database:"phpdasar",
);


// function query
function query($query){
    
    $result = mysqli_query(mysql: $GLOBALS['connect'], query: $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// pengecekan koneksi


// ambil data (fetch) mahasisiswa dari obejct result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya numerik dan associative
// mysqli_fetch_object() // mengembalikan object



// jangan lupa untuk melooping
// while($view_database= mysqli_fetch_assoc($result)){
//     var_dump($view_database);
// }


