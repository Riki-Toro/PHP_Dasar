<?php
    // SINTAKS PHP

    // standart output
    // echo, print

    // // untuk debug
    // print_r
    // var_dump

    echo "Riki Widiantoro";
    print "Riki Widiantoro";

    print_r("Riki Widiantoro");
    var_dump("Riki Widiantoro");



// variabel dan tipe data
// aturan pembuatan variabel
// 1. tidak boleh diawali dengan angka, tapi boleh mengandung angka
// 2. 
    $nama = "Riki Widiantoro";

    // kutip dua sedikit lebih sakti dibanding kutip satu >> karena dengan menggunakan kutip dua kita bisa menggunakan konsep yang namanya interpolasi >> adalah untuk mengecek apakah didalam kutip dua ada string terdapat variabel apa tidak, jika ada maka yg ditampilkan adalah variabelnya

    echo "halo, nama saya $nama";
    echo 'halo, nama saya $nama';

// operator
// aritmastika >> + - * / %

// penggabungan string / concat
// php . klo di javascript +
$nama_depan = "Riki";
$nama_belakang = "Widiantoro";

echo $nama_depan . " " . $nama_belakang;


// operator assignment >> operator penugasan
// = , +=, -=, *=, /=, %=
$x = 1;
$x += 5;
echo $x;

$namas = "Riki";
$namas .= " ";
$namas .= "Widiantoro";
echo $namas;


// operator perbandingan
// <, >, <=, >=, ==

// operator identitas
// ===, !==


// operator logika
// &&, ||, !

?>

<!-- penulisan sintaks PHP
1. PHP di dalam HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
</head>
<body>
    <h1>Hallo Selamat datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraf" ?></p>

<!-- 2. HTML di dalam PHP >> kurang di sarankan -->
    <?php 
        echo " <h2>Judul Artikel </h2> ";
    ?>

</body>
</html>
