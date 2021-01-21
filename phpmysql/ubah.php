<?php 
require 'functions.php';

//ambil data di URL

$id = $_GET["id"];

//query data mahasiswa berdasarkan id ,[0] untuk mengambil data di kotak pensil jika dibiarkan query mengambil kotak pensilnya
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


//cek apakah tombol submit sudah di klik pa belom
if( isset($_POST["submit"])) {
  
    //cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php';
              </script>
              ";
    } else {
        echo "
        <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'index.php';
              </script>
              ";   }
}

?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body class="html">
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                
                <input type="hidden" name="id" value="<?=$mhs["id"];?>">
                <input type="hidden" name="gambarLama" value="<?=$mhs["gambar"];?>">

                <td>
                    <label for="nim">NIM : </label>
                </td>
                <td><input type="text" id="nim" name="nim" required value="<?= $mhs["nim"];?>"></td>
            </tr>
            <tr>  
                <td>
                    <label for="nama">Nama : </label>
                </td>
                <td><input type="text" id="nama" name="nama" required value="<?= $mhs["nama"];?>"></td>
            </tr>
            <tr>
                <td>
                    <label for="prodi">Prodi : </label>
                </td>
                <td><input type="text" id="prodi" name="prodi" required value="<?= $mhs["prodi"];?>"></td>
            </tr>
            <tr>
                <td>
                    <label for="gambar">Gambar : </label>
                </td>
                <td> <img src="img/<?= $mhs['gambar']; ?>" width="40"></td>
                <td><input type="file" id="gambar" name="gambar"></td>
            </tr>
        </table>
    

            <button type="submit" name="submit">Ubah data</button>
        
    </form>

</body>
</html>