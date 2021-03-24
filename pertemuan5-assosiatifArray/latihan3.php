<?php 
//array numerik adalah array yang index nya angka
// $mahasiswa = [
//     ["Riki Widiantoro", "111111", "Teknik Informatika", "qwerty.com"],
//     ["Eren Yeager", "222222", "Teknik Industri", "eren.com"]
// ];

// array assosiative
// sama seperti array numerik, tapi
// key nya adalah string yang kita buat sendiri
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

echo $mahasiswa[1]["nama"];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs): ?>
    <ul>
        <li>
            <img src="img/<?php echo $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NIM : <?php echo $mhs["nim"]; ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
        <li>Email : <?php echo $mhs["email"]; ?></li>
    </ul>
<?php endforeach; ?>




</body>
</html>