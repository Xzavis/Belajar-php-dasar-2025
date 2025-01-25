<!-- 

** pengulangan
1. for
2. while
3. do.. while
4. foreach (pengulangan khusus array)

** pengkondisional / percabangan
1. if.. else
2. if.. else if.. else
3. ternary
4. switch

-->

<?php

echo "<h2>------------------- Pengulangan -------------------</h2>";

for ($i = 1; $i <= 5; $i++) {
    echo "<p>Perulangan ke-$i</p>";
}

echo "<p>nilai i adalah 1, nilai i lebih kecil sama dengan 5, dan nilain i akan bertambah sampai false</p></p>";

echo "<br>";

echo "While Loop";
$a = 0;
while ($a < 5) {
    echo "<p>Perulangan ke-$a</p>";
    $a++;
}

echo "<br>";

echo "do.. while Loop";

$w = 10;
do {
    echo "<p>Perulangan</p>";
    $w++;
} while ($w < 5);

echo "<br>";

echo "<h2>------------------- Pengkondisional / Percabangan -------------------</h2>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0" style="font-family: 'Courier New', Courier, monospace;">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            // membuat Column
            for ($j = 1; $j <= 5; $j++) {
                echo "<th> $i,$j </th>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <br>

    <!-- Cara kedua -->
    <table border="1" cellpadding="10" cellspacing="0" style="font-family: 'Courier New', Courier, monospace;">
        <?php for ($i = 2; $i <= 3; $i++) : ?>
            <tr>
                <?php for ($j = 3; $j <= 5; $j++) { ?>
                    <th>
                        <?= "$i,$j"; ?>
                    </th>
                <?php } ?>
            </tr>
        <?php endfor ?>

    </table>

    <br>


    <form action="" method="POST">
        <label for="nilaiA">Masukan Nilai A:</label>
        <input type="number" name="nilaiA" id="nilaiA" required>
        <br>
        <button type="submit" name="kirin">Submit</button>
    </form>



    <?php
    if ($_SERVER["REQUEST_METHOD"] = "POST") {
        $nilaiA = (int)$_POST["nilaiA"];

        if ($nilaiA < 11) {
            echo "jika nilai A adalah $nilaiA lebih kecil dari 11 maka akan menampilkan <b>BENAR</b>";
        } else {
            echo "Jika nilai A adalah $nilaiA lebih besar dari 11 maka akan menampilkan <b>SALAH</b>";
        }
    } else {
        echo "Silahkan masukan nilai A";
    }

    echo "<br>";
    echo "<br>";
    ?>

    <table border="1" cellpadding="10" cellspacing="0" style="font-family: 'Courier New', Courier, monospace;">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                    <tr style="background-color: lightblue;">
                <?php else : ?>
                    <tr>
                <?php endif ?>

                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <?php if ($j % 2 == 0) : ?>
                        <th style="background-color: lightcoral;">
                        <?php else : ?>
                            <th>
                        <?php endif ?>
                            <?= "$i,$j"; ?>
                        </th>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>

    </table>
</body>

</html>