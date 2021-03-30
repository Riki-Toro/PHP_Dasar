<?php
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");


// ambil data dimasukan dalam kotak dengan rapi sesuai baris/row
function ambil($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);

    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


?>
