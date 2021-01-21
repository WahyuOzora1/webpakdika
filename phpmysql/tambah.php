<?php 

session_start();
//jka tidak ada session maka tendang ke login.php

if (!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
}

require 'functions.php';

//cek apakah tombol submit sudah di klik pa belom

if( isset($_POST["submit"])) {

    //cek apakah data berhasil di tambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
              </script>
              ";
    } else {
        echo "
        <script>
                    alert('data gagal ditambahakan!');
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
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>
                    <label for="nim">NIM : </label>
                </td>
                <td><input type="text" id="nim" name="nim" required></td>
            </tr>
            <tr>  
                <td>
                    <label for="nama">Nama : </label>
                </td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>
            <tr>
                <td>
                    <label for="prodi">Prodi : </label>
                </td>
                <td><input type="text" id="prodi" name="prodi" required></td>
            </tr>
            <tr>
                <td>
                    <label for="gambar">Gambar : </label>
                </td>
                <td><input type="file" id="gambar" name="gambar" required></td>
            </tr>
        </table>
    

            <button type="submit" name="submit">Tambah data</button>
        
    </form>

</body>
</html>