<?php 

date(format: "y-m-d");
echo date(format: "l d-m-Y");
// tanggal akan mengikuti tanggal saat ini

// kita akan membuat sebuah tanggal yang ada di Indonesia

echo "<br>";

date_default_timezone_set(timezoneId: "Asia/Jakarta");

echo "Waktu: " . date_default_timezone_get();

echo "<br>";
// Set Waktu
echo date('l d-m-Y H:i:s');

// mktime
// mktime(000000)
// mktime(hour, minute, second, month, day, year)
echo '<br>';
echo mktime(hour: 0,minute: 0,second: 0,month: 27,day: 10,year: 2006);

// konversi dari mktime ke date
echo '<br>';

echo date(format: "l", timestamp: mktime(hour: 0,minute: 0,second: 0,month: 27,day: 10,year: 2006));
?>