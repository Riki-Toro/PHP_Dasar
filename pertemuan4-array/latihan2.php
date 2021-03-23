<?php
// melakukan pengulangan pada array
// for / foreach
$angka = [2,3,67,96,33,64];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            text-align: center;
            background-color: salmon;
            margin: 3px;
            float: left;
            line-height: 50px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <!-- cara pertama looping dengan for -->
    <?php for( $i = 0; $i < count($angka); $i++ ) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- cara kedua looping dengan foreach -->
    <?php foreach( $angka as $a ) { ?>
        <div class="kotak"><?php echo $a ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- memperbaiki dengan gaya penulisan template ting -->
    <?php foreach( $angka as $a ) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>

</body>
</html>