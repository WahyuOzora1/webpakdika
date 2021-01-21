$(document).ready(function() {
    //hilangkan tombol cari
    $('#tombol-cari').hide();
    //buat event ketika keyword ditulis
    $('#keyword').on('keyup', function() {  //jquery tolong carikan saya elemen keyword on event keyup lakukann fungsi berikut ini
        //munculkan ikon loader ketika di pencet
        $('.loader').show();
      
        //ajax menggunakan load
        //$('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());  //jquery carikan elemen container ubah isinya dengan data dari sumber dan kirimkan dengan apappun diketikkan user

        //$.get()

        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data) { //get data dan lakukan sesuatu sambil mengirimkan data
            $('#container').html(data); //mengganti isi kontainer 
            $('.loader').hide();
        });


    }); 


});