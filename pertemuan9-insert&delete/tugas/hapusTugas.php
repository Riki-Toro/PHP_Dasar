<?php
require 'functionsTugas.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
    echo "<script>
        alert('Data Barang berhasil dihapus!');
        document.location.href = 'indexTugas.php';
    </script>";
} else {
    echo "<script>
        alert('Data Barang gagal dihapus!');
        document.location.href = 'indexTugas.php';
    </script>";
}


?>
