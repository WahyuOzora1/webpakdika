<?php 
session_start();
//jka tidak ada session maka tendang ke login.php

if (!isset($_SESSION["login"])){
    header("Location:login.php");
    exit;
}

require 'functions.php';

//pagination
//konfigurasi

/* 
$jumlahdataperhalaman = 2;
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
mysqli_num_rows($result); //ada berapa baris (mahasiswa) dalam tabel (mahasiswa)
$jumlahdata = mysqli_num_rows($result);
 
atau
*/  /*PAGINATION



$jumlahDataPerHalaman = 3;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData/$jumlahDataPerHalaman); //ceil membulatkan keatas, round terdekat, floor ke bawah
$halamanAktif = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;  //operator ternary jika kondisi true maka halamanAktif diisi $_GET["halaman"] jika tidak isi 1

//halaman = 2 awalData = 3  0,1, berarti lanjutnya 2
//halaman = 3 awalData = 4  0,1 2,3 berarti lanjutannya 4 
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

*/

// $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");  PAGINATION //mulai dari index 0 dengan dua data perhalaman
$mahasiswa = query("SELECT * FROM mahasiswa");
//jika tombol cari di klik
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
} 

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 80px;
            position: absolute;
            top: 125px;
            left: 320px;
            z-index: -1;
            display: none;
        }
        
        @media print {
            .logout {
                display: none;
            }

        }
    </style>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body class="html">
    <a href="logout.php" class="logout">Logout</a>
    <h1>DAFTAR HADIR MAHASISWA</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br></br>   

    <form action="" method="POST">

        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off" id="keyword">
        <button type="submit" name="tombol-cari" id="tombol-cari">Cari</button>
        <img src="img/loader.gif" alt="" class="loader">
    </form>
    
<br><br>
  <?php /* Navigasi

    <?php if($halamanAktif > 1) : ?>
        <a href="?halaman=<?=$halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for($i = 1; $i <= $jumlahDataPerHalaman; $i++) :?>
        <?php if($i == $halamanAktif) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight : bold; color: red;"><?= $i ?></a>
        <?php else: ?>
        <a href="?halamsan=<?= $i; ?>"><?= $i ?></a>
        <?php endif; ?>
    <?php endfor;?>
    
    <?php if($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?=$halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>

   */ ?>
 <div id="container">
<br>
    <table border="1" cellpadding="10" cellspacing="0" style="text-align: center;">
        <tr>
            <th>NO</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
        
        </tr>

    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row) : ?>

        <tr>
            <td><?= $i;?></td>
            <td>
                <a href="ubah.php?id= <?= $row["id"];?>">Ubah</a> |
                <a href="hapus.php?id= <?= $row["id"];?>">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"];?>" alt=""></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["prodi"]; ?></td>
        </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
        
    </table>
    </div>
   
   
   
    
</body>
</html>