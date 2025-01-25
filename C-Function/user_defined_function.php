<?php 
function sayPerson($nama){
    $salam = waktuOtomatis();
    return $salam . ", " . $nama;

}

// membuat fungsi waktu otomatis
function waktuOtomatis(){
    date_default_timezone_set("Asia/Jakarta");
    // Jam
    $jam = date("Y-m-d H:i:s");

    if($jam >= 1 && $jam <= 12 ){
        return "Selamat Pagi";
    } else if ($jam >= 12 && $jam <= 15){
        return "Selamat Siang";
    } else if ($jam >= 15 && $jam <= 18){
        return "Selamat Sore";
    } else {
        return "Selamat Malam";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <h1>
        <?= sayPerson(nama: "Xza")?>
    </h1>
</body>
</html>