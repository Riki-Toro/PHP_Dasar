<?php
// koneksi ke database
// (nama host database/hostname, username mysql, password, database)
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
// (koneksi ke database=$conn diatas, querynya mau apa/ data mahasiswa)
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// yg dibutuhkan bajunya bukan lemarinya/yg dibutuhkan isinya bukan dibawa wadahnya, jadi butuh satu step lagi
// ambil data (fetch) mahasiswa dari object result

// ada 4 cara :
// mysqli_fetch_row() >> mengembalikan array numerik
// mysqli_fetch_assoc() >> mengembalikan array assosiatif | lebih nyaman digunakan karena buat sendiri
// mysqli_fetch_array() >> mengembalikan dua"nya | lebih fleksibel | kekurangannya didalam array ada dua"nya atau double
// mysqli_fetch_object() >> nggak akan dipakai karena mengembalikan object karena tida punya key dan value | harus pakai cara object pakai panah.


// pengulangan agar diambil semua
// while( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs);
// }





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
            <tr>
                <td><?php echo $i;  ?></td>
                <td><img src="img/<?php echo $row["gambar"] ?>"></td>
                <td><?php echo $row["nim"] ?></td>
                <td><?php echo $row["nama"] ?></td>
                <td><?php echo $row["email"] ?></td>
                <td><?php echo $row["jurusan"] ?></td>
                <td>
                    <a href="">ubah</a>
                    <a href="">hapus</a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>

</body>
</html>
