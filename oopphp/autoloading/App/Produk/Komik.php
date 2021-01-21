<?php

//kelas komik diperbolehkan menggunkan semua  method parentsnya (produk)
class Komik extends Produk implements infoProduk{
    public $jmlhalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $jmlhalaman=0){
        
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->$jmlhalaman=$jmlhalaman;

    }
    public function getInfoProduk() { // parent::getInfoProduk() mengambil method/property dari parent (function getinfoproduk)
        $str = "Komik : ". $this->getInfo() . " - {$this->jmlhalaman} Halaman."; //pemanggilan parent getInfoProduk
        return $str;
    }

    public function getInfo() {
        //komik : Naruto \ Masashi Kashimoto, Sanden (Rp.300000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }


}

?>