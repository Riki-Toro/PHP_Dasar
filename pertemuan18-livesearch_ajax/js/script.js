// ambil elemen
const keyword = document.getElementById('keyword');
const tombolCari = document.getElementById('tombol-cari');
const container = document.getElementById('container');

// untuk menjalankan ajax kita butuh trigger/aksi/event
// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
    
    // buat object abjax
    let xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function() {
        if ( xhr.readyState == 4 && xhr.status == 200 ) {
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    // (request method, sumbernya dari mana, mau synchronus(false) atau asynchronous(true))
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();




});
