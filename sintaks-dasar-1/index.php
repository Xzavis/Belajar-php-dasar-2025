<?php

// sintaks dasar PHP

// Standar Ouput
// - echo, print
// - print_r ==> untuk mencetak isi array
// - var_dump ==> untuk melihat isi variabel

// echo 
const teks = "Page dasboard";
echo teks; // output: Page dasboard

// print_r
print_r(teks); // output: Page dasboard

var_dump(teks); // output: string(13) "Page dasboard"

echo true; // output: 1
echo false; // output:

?>

<!-- 
// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP 
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <h1><?php echo teks; ?></h1> 

    <!-- sekarang kita juga bisa membuatnay didalam tag php -->
     <?php 

     echo "<h1>Page dasboard ke 2</h1>";
     
     ?>
</body>
</html>


<?php

// variabel dan tipe data
// variabel

$name = "Xza";
echo $name; // output: Xza

echo "<h1>Selamat datang $name</h1>"; 

?>

<?php 
// operator aritmatika
//  + - * / %

$a = 1;
$b = 5;

echo "<p>Kalkulator: $a + $b = " . ($a + $b) . "</p>";
echo "<p>Kalkulator: $a - $b = " . ($a - $b) . "</p>";
echo "<p>Kalkulator: $a * $b = " . ($a * $b) . "</p>";
echo "<p>Kalkulator: $a / $b = " . ($a / $b) . "</p>";
echo "<p>Kalkulator: $a % $b = " . ($a % $b) . "</p>";

// penggabungan string / concatenation / concat
$nama_depan = "Xza";
$nama_belakang = "Ibrahim";

echo "<p>Nama Lengkap: ". $nama_depan . " " . $nama_belakang ."</p>";

$nama_lengkap = "Xza";
$nama_lengkap .= " ";
$nama_lengkap .= "Ibrahim";

echo "<p>Nama lengkap: $nama_lengkap</p>";

// perbandingann
// <, >, <=, >=, ==, !=

var_dump(1 < 5); // output: bool(true)
var_dump(1 > 5); // output: bool(false)

var_dump(1 <= 1); // output: bool(true)
var_dump(1 >= 2); // output: bool(false)

var_dump(1 == "1"); // output: bool(true)
var_dump(1 == 1); // output: bool(true)

// indentitas
// ===, !==

var_dump(1 === "1"); // output: bool(false)
var_dump(1 === 1); // output: bool(true)

var_dump(1 !== "1"); // output: bool(true)
var_dump(1 !== 1); // output: bool(false)


// Logika
// &&, ||, !

// kita akan mengeceke bilangan x apakah bilangan genap atau ganjil
$x = 10;

var_dump($x < 20 && $x % 2 == 1); // output: bool(false) karena 10 % 2 = 0
var_dump($x < 20 && $x %2 == 0 ); // output: bool(true) karena 10 % 2 = 0 

echo "<br>";
echo "<br>";
echo "<br>";

var_dump($x < 20 || $x < 1); 
echo "<br>";
var_dump($x < 9 || $x > 11);
echo "<br>";

?>