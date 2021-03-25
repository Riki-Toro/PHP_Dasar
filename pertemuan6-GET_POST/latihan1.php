<?php 
// metode request $_GET dan $_POST
// var_dump($_GET);
$mahasiswa = [
    [
        "nama" => "Riki widiantoro", 
        "nim" => "111111", 
        "jurusan" => "Teknik Informatika", 
        "email" => "qwerty.com", 
        "gambar" => "2.jpg"
    ],
    [
        "nama" => "Eren Yeager", 
        "nim" => "222222", 
        "jurusan" => "Teknik Industri", 
        "email" => "eren.com",
        "gambar" => "eren.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <a href="latihan2.php?nama=<?php echo $mhs["nama"]; ?>&nim=<?php echo $mhs["nim"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>&email=<?php echo $mhs["email"]; ?>&gambar=<?php echo $mhs["gambar"]; ?>"><li><?php echo $mhs["nama"]; ?></li></a>
        <?php endforeach; ?>
    </ul>

    <!-- metode request GET adalah metode pengiriman data melalui url dan data tersebut bisa diambil atau ditangkap oleh variabel superglobal $_GET -->

</body>
</html>
