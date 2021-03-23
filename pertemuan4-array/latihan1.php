<?php
    // ARRAY
    // adalah sebuah variabel yang dapat menampung banyak nilai
    // elemen pada array boleh memiliki tipe data yang berbeda
    // pasangan antara key dan value
    // key-nya adalah index, yang di mulai dari nol

    // membuat array
    // cara lama
    $hari = array("Senin", "Selasa", "rabu");

    // cara baru
    $bulan = ["Januari", "February", "Maret"];

    $arr1 = [123, "tulisan", false];


    // // menampilkan array
    // var_dump() | print_r()
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";

    // // menampilkan satu elemen pada array
    // echo $arr1[0];
    // echo $bulan[1];

    // menambahkan elemen baru pada array
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jumat";
    echo "<br>";
    var_dump($hari);
?>
