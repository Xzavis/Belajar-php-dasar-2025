<?php

$numbersRandom = [12, 12, 1, 43, 43, 11, 16, 12, 43, 53, 00, 12];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .numbers {
            height: 50px;
            width: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            font-family: 'inter';
            margin: 5px;
            float:left;
        }
        .clear{ clear: both;}
    </style>
</head>

<body>

    <?php for($i = 0; $i < count($numbersRandom); $i++ ) : ?> 
        <div class="numbers"> <?= $numbersRandom[$i]?></div>
    <?php endfor?>

    <div class="clear"></div>

    <!-- langsung terlooping sesuai panjang Array numbersRandom tanpa menggunakan count -->
    <?php foreach( $numbersRandom as $number ) : ?>
        <div class="numbers"> <?= $number ?></div>
    <?php endforeach?>
</body>

</html>