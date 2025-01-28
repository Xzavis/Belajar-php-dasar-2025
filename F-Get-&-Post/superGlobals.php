<?php 
// varibale superglobals
// seperti $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV
// variable ini bisa diakses dimanapun dan kapanpun di dalam script PHP kita
// variale ini adalah variable associative

// mari kita bedah variable superglobals $_GET
var_dump($_GET);
// Ouput: array(0) { }

echo "<br>";

var_dump($_POST);
// Ouput: array(0) { }

echo "<br>";
echo "<br>";

var_dump($_SERVER);

// kita akan mencari informasi tentang server kita
echo "<br>";
echo "<br>";

echo $_SERVER["SERVER_SOFTWARE"];
// Output: localhost
?>