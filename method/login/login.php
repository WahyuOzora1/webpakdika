<?php 
//apakah tombol sudah di submit pa belom
if (isset($_POST["submit"])) {
    //cek username & password
   if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
    //jika benar masuk ke halaman admin.php
        header("Location:admin.php");
        exit;
    } else {
        $error = true;
}

}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="html">
    <h2>Login Admin</h2>

    <?php  if(isset($error)) : ?>
    <p style="color : red; font-style : italic;"> "Username/password salah"</p>
    <?php endif;  ?>
<ul>
    <form action="" method="post">
        <li>
             <label for="username">Username :</label>
             <input type="text" name="username" id="username">
        </li>     

        <li>
             <label for="password">Passsword:</label>
             <input type="text" name="password" id="password">
        </li>

        <li>
             <button type="submit" name="submit">Login</button>
        </li>
    </form>

</ul>    
</body>
</html>