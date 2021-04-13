// JQUERY
// $ = jquery
$(document).ready(function() {
    // hilangkan tombol cari
    // $('#tombol-cari').hide();

    // buat event ketika keyword ditulis
    $('#keyword').on('keyup', function() {
        // munculkan icon loading
        $('#loader').show();

        // ajax $.get()
        $.get('ajax/mahasiswa.php?keyword=' + $('keyword').val(), function(data) {
            $('#container').html(data);
            $('#loader').hide();
        });


        // ajax load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('keyword').val());
    });
});
