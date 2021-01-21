<?php 
//jualan produk
//komik
//Game


class Produk {
    //public, private variabel adalah poperty
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    //metode khusus untuk menjalankan instance kelas yang ada dalam parameter
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0){
        //mengisi properti
    $this->judul=$judul;   //$judul mengacu pada pada parameter construct($judul)
    $this->penulis=$penulis;
    $this->penerbit=$penerbit;
    $this->harga=$harga;
    }
    
    public function getLabel(){

        //menngembalikan nilai darii propertti judul dan penulis, this untuk mengambil di luar scopeuh
        return "$this->penulis,$this->penerbit";

    }

    public function getInfoProduk(){
        //komik : Naruto \ Masashi Kashimoto, Sanden (Rp.300000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }
}

//kelas komik diperbolehkan menggunkan semua  method parentsnya (produk)
class Komik extends Produk {
    public $jmlhalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $jmlhalaman=0){
        
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->$jmlhalaman=$jmlhalaman;

    }
    public function getInfoProduk() { // parent::getInfoProduk() mengambil method/property dari parent (function getinfoproduk)
        $str = "Komik : ". parent::getInfoProduk() . " - {$this->jmlhalaman} Halaman.";
        return $str;
    }
}
class Game extends Produk {
    public $jmleps;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $jmleps=0){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->$jmleps=$jmleps;

    }
    public function getInfoProduk(){
        $str = "Game : ". parent::getInfoProduk() . " ~ {$this->jmleps} eps.";
        return $str;
    }
}

//OBJECT TYPE
// produk $produk fungsi cetak hanya menerima dari kelas produk
class CetakInfoProduk {
    public function cetak (produk $produk) { 
        $a = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $a;
    }
}
//instance variabel
$produk1 = new Komik("Naruto", "Masashi Kashimoto", "Sanden", 300000, 100);
$produk2 = new Game("Basara", "Yu lis", "Yu Bit", 150000, 360);

//panggil dari function getLabel
 /*echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Komik : ". $produk2->getLabel();

echo"<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
*/

echo $produk1->getInfoproduk();
echo "<br>";
echo $produk2->getInfoproduk();

?>