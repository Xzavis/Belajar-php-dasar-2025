<?php 

// Array
// variable yang dapat memiliki banyak nilai

// yang lama
$hari = array("Senin", "Selasa", "Rabu");

// yahg baru
$bulan = ["Januari", "Februari", "Maret"];

var_dump($bulan);

echo "<br>";

print_r($hari);

echo "<br>";
echo $bulan[0]; 

echo "<br>";
$bulan[] = "April";
var_dump($bulan);

?>