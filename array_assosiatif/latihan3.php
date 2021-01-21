<?php

//array numerik
$mahasiswa = [
    ["nama"=>"Wahyu Restu Pamuji", "nim"=>"201951257", "prodi"=>"Teknik Informatika", "gambar"=>"1.jpg"],
    ["nama"=>"Tisa Ayu Novianti", "nim"=>"201951258", "prodi"=>"Ilmu Statistik", "gambar"=>"2.jpg"],
    ["nama"=>"Nida Amira", "nim"=>"201951259", "prodi"=>"Pend. Matematikaa", "gambar"=>"3.jpg"]
];

//array assosiatif
//key nya string yang kita buat sendiri

/*$siswa = [
    [
    "nama"=>"Wahyu Restu Pamuji", 
    "nim"=>"201951257", 
    "prodi"=>"Teknik Informatika"
    ],

    [
    "nama"=>"Tisa Ayu Novianti", 
    "nim"=>"201951258", 
    "prodi"=>"Teknik Industri"
    ],

    [
    "nama"=>"Nida Amira", 
    "nim"=>"20195125", 
    "prodi"=>"Teknik Sipil",
    "alamat"=> ["menawan", "gebog", "jekulo"]
    ] 
];

echo $siswa["2"] ["alamat"][0]; //array terluar dulu ambil index

*/
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="html">
    <h1>Daftar Mahasiswa</h1>
 
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src = "wallpaper/<?= $mhs["gambar"]; ?> ">
            </li>
            <li>Nama :<?= $mhs["nama"]; ?></li>
            <li>NIM :<?= $mhs["nim"]; ?></li>
            <li>Prodi :<?= $mhs["prodi"]; ?></li>
        </ul>
    <?php endforeach; ?>






</body>
</html>