<?php 

/*
require_once 'App/Produk/infoProduk.php';
require_once 'App/Produk/Komik.php';
require_once 'App/Produk/Game.php';
require_once 'App/Produk/CetakInfoProduk.php';
*/

spl_autoload_register(function($class){
    // App\Produk\User = ["App", "Produk", "User"]  => explode
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Produk/' .$class. '.php';
});

spl_autoload_register(function($class){
    // App\Produk\User = ["App", "Produk", "User"]  => explode
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' .$class. '.php';
});


?>