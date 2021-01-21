<?php 

$mahasiswa =  ["Wahyu Restu Pamuji", "080786887", "Teknik Informatika", "Joss"];
$siswa = [
    ["Tisa", "Cantik", "Baik", "Muslimah"],
    ["Nida", "Manis", "Baik", "Muslimah"],
    ["Syafana", "Lugu", "Baik", "Muslimah"]

];


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="html">
    <h1>DAFTAR MAHASISWA</h1>
  
        <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>

        <?php endforeach; ?>
        </ul>


<?php foreach($siswa as $murid) : ?>
        <ul>
            <li> NAMA : <?= $murid[0]; ?></li>
            <li> <?= $murid[1]; ?></li>
            <li><?= $murid[2]; ?></li>
            <li><?= $murid[3]; ?></li>
        </ul>

<?php endforeach; ?>


</body>
</html>