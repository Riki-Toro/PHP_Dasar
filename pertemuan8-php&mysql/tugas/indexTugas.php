<?php
    // menghubungkan functions
    require 'functionsTugas.php';

    // ambil data dari tabel
    $toko = ambil("SELECT * FROM tokoriki");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Toko Riki</title>
</head>
<body>
    <h1>Daftar Barang Toko Riki</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Rak</th>
            <th>Harga</th>
            <th>Diproduksi</th>
            <th>Expired</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $toko as $item ) : ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><img src="gambar/<?php echo $item["gambar"]; ?>" width="50"></td>
                <td><?php echo $item["namaBarang"]; ?></td>
                <td><?php echo $item["rak"]; ?></td>
                <td>Rp. <?php echo $item["harga"]; ?></td>
                <td><?php echo $item["diproduksi"]; ?></td>
                <td><?php echo $item["expired"]; ?></td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Hapus</a>
                </td>
            </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
