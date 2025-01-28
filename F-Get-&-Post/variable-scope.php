<?php

// variable scope

// ini adalah variable lokal
$x = 10;

// mari kita coba membuat variable lokal di dalam function
// apakah bisa diakses di luar function?

function tampil(){
    global $x;
    // ini adalah variable lokal
    echo $x;
}

tampil();
echo "<br>";
echo $x;


