<?php 

//koneksi ke database
$conn = mysqli_connect("Localhost", "root", "", "phpdasar");
//ambil datq  dari tabel mahasiswa/query mahasiswa

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
if(!$result) {
    echo mysqli_error($conn);
}

//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row() //mengembalikan array  numerik
//mysqli_fetch_assoc() //mengembalikan array assosiatif
//mysqli_fetch_array() //mengembalikan keduanya
//mysqli_fetch_object() //mengembalikan array objek

/*
while ($mhs = mysqli_fetch_assoc($result) ) {
var_dump($mhs);
}

*/
?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body class="html">
    <h1>DAFTAR HADIR MAHASISWA</h1>
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
    <?php while ($row = mysqli_fetch_assoc($result) ) : ?>

        <tr>
            <td><?= $i;?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"];?>" alt=""></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["prodi"]; ?></td>
            <td><?= $row["prodi"]; ?></td>
        </tr>
    <?php $i++ ?>
    <?php endwhile; ?>
        
    </table>

</body>
</html>