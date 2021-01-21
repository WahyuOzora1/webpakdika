<?php

class CetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk(produk $produk){ //mnerima objek tipe produk
        $this->daftarProduk[]=$produk; //menambahkan produk baru ke daftarBaru
    }
    public function cetak() { 
        $str = "Daftar Produk :<br>";
        foreach($this->daftarProduk as $p){ //dari daftarProduk kita ambil data satu persatu
            $str .= "-{$p->getinfoProduk()} <br>"; // gabungkan dengan concet
        }
        return $str;
    }
}

?>