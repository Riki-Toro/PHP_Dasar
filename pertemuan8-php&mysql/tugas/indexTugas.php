<?php
    // koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

    // ambil data dari tabel
    $ambil = mysqli_query($koneksi, "SELECT * FROM tokoriki");

    // ambil data dari tabel lalu simpan dalam kotak
    // while($toko = mysqli_fetch_assoc($ambil)) {
    //     var_dump($toko);
    // };
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Riki</title>
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
        <?php while($toko = mysqli_fetch_assoc($ambil)) : ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><img src="gambar/<?php echo $toko["gambar"]; ?>" width="50"></td>
                <td><?php echo $toko["namaBarang"]; ?></td>
                <td><?php echo $toko["rak"]; ?></td>
                <td>Rp. <?php echo $toko["harga"]; ?></td>
                <td><?php echo $toko["diproduksi"]; ?></td>
                <td><?php echo $toko["expired"]; ?></td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Hapus</a>
                </td>
            </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
    </table>
</body>
</html>
