<?php 

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kashimoto", "Sanden", 300000, 100);
$produk2 = new Game("Basara", "Yu lis", "Yu Bit", 150000, 360);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1); //jalanin fungsi tambahProduk
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();



new user();

?>