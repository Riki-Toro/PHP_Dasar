<!-- ARRAY NUMERIK -->
<!-- array yang indeks nya angka >> penempatannya harus sama -->
<!-- kalau mau tidak sama harus menggunakan array asosiatif di pertemuan 5 -->
<?php
    $mhs = [
        ["Riki Widiantoro", "111111", "Teknik informatika", "qwerty.com"],
        ["abcd", "222222", "Teknik industri", "abcd.com"],
        ["efghij", "333333", "Teknik mesin", "efghij.com"]
    ];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <!-- pengulangan didalam pengulangan >> pengulangan bersarang -->
    <?php foreach( $mhs as $m ) : ?>
        <ul>
            <!-- <?php foreach($m as $s) : ?>
                <li><?php echo $s; ?></li>
            <?php endforeach; ?> -->

            <!-- atau -->

            <li>Nama : <?= $m[0]; ?></li>
            <li>Nim : <?= $m[1]; ?></li>
            <li>Jurusan : <?= $m[2]; ?></li>
            <li>Email : <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>


</body>
</html>