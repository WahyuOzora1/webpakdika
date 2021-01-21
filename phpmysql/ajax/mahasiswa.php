<?php 
require '../functions.php';
sleep(1);
$keyword  =  $_GET["keyword"];
$query = "SELECT * FROM mahasiswa WHERE 

nama LIKE '%$keyword%' OR 
nim LIKE '%$keyword%' OR
prodi LIKE '%$keyword%'
";

$mahasiswa = query($query);
?>
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