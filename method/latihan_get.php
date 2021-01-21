<?php 
//cek apakah tidak ada data di $_Get
//isset untuk mengecek apakah data ada atau tidak
     if (!isset ($_GET["nama"]) || 
         !isset ($_GET["nim"]) || 
         !isset ($_GET["gambar"]) || 
         !isset ($_GET["prodi"]) 
    
        ) {
        //redirect
        header ("Location : get.php");
        exit;
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="htnl">
    
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET ["nama"]; ?></li>
        <li><?= $_GET ["nim"]; ?></li>
        <li><?= $_GET ["prodi"]; ?></li>
    </ul>

 <a href="get.php">Kembali ke Daftar Mahasiswa</a>

</body>
</html>