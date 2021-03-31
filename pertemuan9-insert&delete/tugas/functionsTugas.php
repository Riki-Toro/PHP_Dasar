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


// tambah barang
function tambah($data) {
    global $koneksi;

    // ambil data yg telah ditambahkan dan masukkan dalam variabel
    $nama = htmlspecialchars($_POST["nama"]);
    $rak = htmlspecialchars($_POST["rak"]);
    $harga = htmlspecialchars($_POST["harga"]);
    $diproduksi = htmlspecialchars($_POST["diproduksi"]);
    $expired = htmlspecialchars($_POST["expired"]);
    $gambar = htmlspecialchars($_POST["gambar"]);

    $query = "INSERT INTO tokoriki VALUES ('', '$nama', '$rak', '$harga', '$diproduksi', '$expired', '$gambar')";

    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}


// hapus barang
function hapus($id) {
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM tokoriki WHERE id = $id");

    return mysqli_affected_rows($koneksi);
}

?>
