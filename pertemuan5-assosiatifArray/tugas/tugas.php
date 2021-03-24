<!-- tugas playlist PHP -->
<!-- membuat array assosiatif dengan 10barang kemudian ditampilkan -->
<?php 
$barang = [
    [
        "nama" => "Beras",
        "rak" => "Rak 1",
        "harga" => 50000,
        "diproduksi" => "PT Bulog (Persero)",
        "ex" => "13-05-2021",
        "gambar" => "beras.jpg"
    ],
    [
        "nama" => "Minyak Goreng",
        "rak" => "Rak 1",
        "harga" => 35000,
        "diproduksi" => "PT Wilmar tbk",
        "ex" => "07-04-2022",
        "gambar" => "minyak.jpg"
    ],
    [
        "nama" => "Pepsodent",
        "rak" => "Rak 2",
        "harga" => 8000,
        "diproduksi" => "PT Unilever tbk",
        "ex" => "10-05-2022",
        "gambar" => "pepsodent.jpg"
    ],
    [
        "nama" => "Ciptadent",
        "rak" => "Rak 2",
        "harga" => 15000,
        "diproduksi" => "PT Unilever tbk",
        "ex" => "14-02-2023",
        "gambar" => "sikatgigi.jpg"
    ],
    [
        "nama" => "Tisu",
        "rak" => "Rak 2",
        "harga" => 9000,
        "diproduksi" => "PT Tempo Scan Pacific tbk",
        "ex" => "17-11-2023",
        "gambar" => "tisu.jpg"
    ],
    [
        "nama" => "Energen",
        "rak" => "Rak 3",
        "harga" => 1200,
        "diproduksi" => "PT Mayora Indah tbk",
        "ex" => "27-12-2021",
        "gambar" => "energen.jfif"
    ],
    [
        "nama" => "Lays",
        "rak" => "Rak 3",
        "harga" => 22000,
        "diproduksi" => "PT Mayora Indah tbk",
        "ex" => "11-11-2021",
        "gambar" => "lays.jfif"
    ],
    [
        "nama" => "Roti Tawar",
        "rak" => "Rak 3",
        "harga" => 12000,
        "diproduksi" => "PT Boga Sari",
        "ex" => "12-14-2021",
        "gambar" => "roti.jpg"
    ],
    [
        "nama" => "Susu BearBrand",
        "rak" => "Rak 3",
        "harga" => 16000,
        "diproduksi" => "PT Tempo Scan Pacific tbk",
        "ex" => "19-01-2022",
        "gambar" => "susu.jpg"
    ],
    [
        "nama" => "Tea Tebs",
        "rak" => "Rak 3",
        "harga" => 6000,
        "diproduksi" => "PT Aqua",
        "ex" => "10-11-2021",
        "gambar" => "teh.jpg"
    ],
];

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
    <h1>Selamat Datang di Toko Riki</h1>

    <?php foreach($barang as $b): ?>
        <ul>
            <li><img src="gambar/<?php echo $b["gambar"]; ?>"></li>
            <li>Nama Barang : <?php echo $b["nama"]; ?></li>
            <li>Rak : <?php echo $b["rak"]; ?></li>
            <li>Harga : Rp.<?php echo $b["harga"]; ?></li>
            <li>Diproduksi oleh : <?php echo $b["diproduksi"]; ?></li>
            <li>Expired : <?php echo $b["ex"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>
