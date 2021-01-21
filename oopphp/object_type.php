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

        //$this->judul mengacu pada property $judul
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
$produk1 = new Produk("Naruto", "Masashi Kashimoto", "sanden", 300000);
$produk2 = new Produk("Tsubasa", "Yu lis", "Yu Bit", 150000);

//panggil dari function getLabel
echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Komik : ". $produk2->getLabel();

echo"<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

?>