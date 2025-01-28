<?php 

function sayPerson(){
    $salam = waktuOtomatis();
    return $salam ;

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
    <!-- Link BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title></title>
</head>
<style>

</style>

<body>
    <!-- Sidebars -->
    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="staticBackdropLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <ul>
                    <!-- <li><a href="Dashboard.php">Dashboard</a></li> -->
                </ul>
            </div>
        </div>
    </div>
    <header class="navbar sticky-top bg-dark p-1 shadow" data-bs-theme="dark">
        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
            Menu
        </button>
    </header>
    <main class="container m-4">
        <h2>
            <?php echo sayPerson().", ". $_POST["name"] ?>
        </h2>
    </main> 

</body>
<!-- Link JS BS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>