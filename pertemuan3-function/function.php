<!-- FUNCTION -->
<!-- adalah potongan program atau baris-baris code yang kita buat untuk mempermudah kita pada saat membuat program, kode program tadi bisa dikasih nama lalu bisa kita panggil berulang-ulang -->

    <?php 
    // <!-- 1. build-in function >> function yang dimiliki php ada sangat banyak -->
    // <!-- Date/Time >> time(), date(), mktime(), strtotime() -->

        // echo date("l, d-M-Y"); // untuk menampilkan tanggal hari ini
        
        // echo time(); // UNIX Timestamp/EPOCH time >> detik yang sudah berlalu sejak 1 januari 1970

        // cara mengetahui 100 hari dari sekarang
        // echo date("l", time()+60*60*24*100);
        // 100 hari ke belakang
        // echo date("l, d-M-Y", time()-60*60*24*100);


        // membuat sendiri detik yang berlalu >> mktime()
        // mktime(0,0,0,0,0,0) >> jam, menit, detik, bulan, tanggal, tahun
        // echo date("l", mktime(0,0,0,11,15,1998));

        // echo date("l", strtotime("15 nov 1998"));

    // string >> strlen(), strcmp(), explode(), htmlspecialchars()
    // utility >> var_dump(), isset(), empty(), die(), sleep()
    


    // <!-- 2. user-defined function >> function yang kita buat sendiri -->
    // di file satunya...
    ?>
