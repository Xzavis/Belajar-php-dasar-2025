<?php
// kita akan membuat batasan agar user tidak bisa mengakses file ini
// dengan url

if (
    !isset($_GET["nama"]) ||
    !isset($_GET["gambar"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["kelas"]) ||
    !isset($_GET["sekolah"])
) {
    // redirect
    header("Location: Get.php");
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .Profile {
            width: calc(50% - 0px);
            height: auto;
            background-color: rgb(239, 243, 254);
            text-align: left;
            padding: 10px;
            border: 1px solidrgb(151, 151, 151);
            border-radius: 12px;
        }

        body {
            background: rgb(207, 211, 251);
        }

        button {
            background-color: rgb(255, 255, 255);
            border: 1px solid rgb(151, 151, 151);
            border-radius: 4px;
            padding: 5px 10px;
            margin: 3px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        .container {
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="Profile">
        <!-- Kembali -->
        <button><a href="Get.php">Back</a></button>
        <!-- Photo Profile -->
        <div class="container">
            <img width="50px" height="50px" src="image/<?= $_GET['gambar'] ?>">
            <p>Username: <?= $_GET["nama"] ?> </p>
            <p>Jurusan: <?= $_GET["jurusan"] ?> </p>
            <p>Username: <?= $_GET["kelas"] ?> </p>
            <p>Username: <?= $_GET["sekolah"] ?> </p>
        </div>

    </div>
</body>

</html>