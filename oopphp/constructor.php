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
    $this->judul=$judul;
    $this->penulis=$penulis;
    $this->penerbit=$penerbit;
    $this->harga=$harga;

    }
    
    public function getLabel(){

        //menngembalikan nilai darii propertti judul dan penulis, this untuk mengambil di luar scopeuh
        return "$this->judul,$this->penulis";

        //$this->judul mengacu pada property $judul
    }
}


//instance variabel
$produk1 = new Produk("Nauto", "Masashi Kashimoto", "sanden");
$produk2 = new Produk("Tsubasa", "Yu lis", "Yu Bit", 150000);
//panggil dari function getLabel
echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Komik : ". $produk2->getLabel();

?>