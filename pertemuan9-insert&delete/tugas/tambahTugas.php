<?php
require 'functionsTugas.php';

// cek apakah tombol submit tambah telah dipencet apa belum
if ( isset($_POST["submit"]) ) {

    // cek apakah data berhasil ditambahkan atau tidak
    if ( tambah($_POST) > 0 ) {
        echo "<script>
            alert('Data barang berhasil ditambahkan!');
            document.location.href = 'indexTugas.php';
        </script>";
    } else {
        echo "<script>
            alert('Data barang gagal ditambahkan!');
            document.location.href = 'indexTugas.php';
        </script>";
    }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
</head>
<body>
    <h1>Tambah Data Barang</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama Barang : </label>
                <input type="text" name="nama" id="nama" autocomplete="off">
            </li>
            <br>
            <li>
                <label for="rak">Rak Barang : </label>
                <input type="text" name="rak" id="rak" autocomplete="off">
            </li>
            <br>
            <li>
                <label for="harga">Harga Barang : </label>
                <input type="text" name="harga" id="harga" autocomplete="off">
            </li>
            <br>
            <li>
                <label for="diproduksi">Diproduksi : </label>
                <input type="text" name="diproduksi" id="diproduksi" autocomplete="off">
            </li>
            <br>
            <li>
                <label for="expired">Expired : </label>
                <input type="text" name="expired" id="expired" autocomplete="off">
            </li>
            <br>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" autocomplete="off">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Tambah!</button>
            </li>
        </ul>
    </form>
</body>
</html>
