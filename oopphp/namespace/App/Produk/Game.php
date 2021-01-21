<?php

class Game extends Produk implements infoProduk {
    public $jmleps;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $jmleps=0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->$jmleps=$jmleps;

    }
  
    public function getInfoProduk(){
        $str = "Game : ". $this->getInfo() . " ~ {$this->jmleps} eps.";
        return $str;
    }

    public function getInfo() {
        //komik : Naruto \ Masashi Kashimoto, Sanden (Rp.300000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }


}


?>