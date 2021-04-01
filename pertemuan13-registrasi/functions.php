<?php
// koneksi ke database
// (nama host database/hostname, username mysql, password, database)
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// tampil
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


// tambah
function tambah($data) {
    global $conn;

    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // upload gambar dulu
    $gambar = upload();
    if ( !$gambar ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO mahasiswa
                VALUES
            ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// upload
function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "
                <script>
                    alert('pilih gambar terlebih dahulu!');
                </script>
            ";
        return false;
    }

    // cek yang diupload apakah gambar atau bukan
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "
                <script>
                    alert('yang anda upload bukan gambar!');
                </script>
            ";
    }

    // cek jika ukuran gambarnya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "
                <script>
                    alert('ukuran gambar terlalu besar!');
                </script>
            ";
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    


    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;

}

// hapus
function hapus($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// ubah
function ubah($data) {
    global $conn;

    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $gambarLama = ($data["gambarLama"]);
    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    

    // query insert data
    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nim = '$nim',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// cari
function cari($keyword) {
    $query = "SELECT * FROM mahasiswa 
                WHERE 
            nama LIKE '%$keyword%'OR
            nim LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
            ";
    return query($query);
}


// registrasi
function register($data) {
    global $conn;

    // diubah menjadi huruf kecil dan dihilangkan karakternya
    $username = strtolower(stripslashes($data["username"]));
    // memungkinkan user memasukkan password ada tanda kutip nya
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah terdaftar!');
            </script>";
        return false;
    }

    // cek konfirmasi password
    if ( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password2, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);


    
}

?>
