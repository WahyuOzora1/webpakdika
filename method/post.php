<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="html">

<?php if( isset($_POST["submit"]) ) :?>
    <h2>Halo, selamat datang <?= $_POST["nama"];?></h2>
<?php endif; ?>

    <form action="" method="post">
        Masukkan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    
    </form>
</body>
</html>