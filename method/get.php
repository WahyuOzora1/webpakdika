<?php 

$mahasiswa = [
    ["nama"=>"Wahyu Restu Pamuji", "nim"=>"201951257", "prodi"=>"Teknik Informatika", "gambar"=>"6.png"],
    ["nama"=>"Tisa Ayu Novianti", "nim"=>"201951258", "prodi"=>"Ilmu Statistik", "gambar"=>"5.png"],
    ["nama"=>"Nida Amira", "nim"=>"201951259", "prodi"=>"Pend. Matematikaa", "gambar"=>"4.png"]
];


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="html">
    <h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach($mahasiswa as $mhs) : ?>
    <li>
    
    <a href="latihan_get.php?
    nama=<?= $mhs["nama"];?> & 
    nim=<?= $mhs["nim"]; ?> &
    prodi=<?= $mhs["prodi"]; ?> &
    gambar=<?= $mhs["gambar"]; ?> 
    "> <?= $mhs["nama"]; ?>
    </a>
    
    </li>   <?php/*Mengirimkan data ke latihan_get.php*/  ?>
<?php endforeach;?>


</ul>
</body>
</html>