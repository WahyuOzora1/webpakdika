<?php 
//jualan produk
//komik
//Game


class Produk {
    //public, private variabel adalah poperty
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel(){

        //menngembalikan nilai darii propertti judul dan penulis, this untuk mengambil di luar scope
        return "$this->judul,$this->penulis";
    }
}

//objek instance
/*$produk1 = new Produk();
$produk2 = new Produk();
*/
//instance variabel
$produk1 = new Produk();
//->menimpa property sebelumnya
$produk1->judul = "Naruto";
$produk1->penulis = "Masasgi Kisimoto";
$produk1->penerbit = "Sanden";
$produk1->harga = 100000;

$produk2 = new Produk();
$produk2->judul = "Tsubasa";
$produk2->penulis = "Park Yu";
$produk2->penerbit = "Yu Saholin";
$produk2->harga = 150000;

//panggil dari function getLabel
echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Komik : ". $produk2->getLabel();

?>