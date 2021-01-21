<?php 
//jualan produk
//komik
//Game


class Produk {
    //public, private variabel adalah poperty
    public $judul,
           $penulis,
           $penerbit,
           $harga,
           $jmlhalaman,
           $jmleps,
           $tipe;


    //metode khusus untuk menjalankan instance kelas yang ada dalam parameter
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $jmlhalaman=0, $jmleps=0, $tipe){
        //mengisi properti
    $this->judul=$judul;   //$judul mengacu pada pada parameter construct($judul)
    $this->penulis=$penulis;
    $this->penerbit=$penerbit;
    $this->harga=$harga;
    $this->jmlhalaman=$jmlhalaman;
    $this->jmleps=$jmleps;
    $this->tipe=$tipe;
    }
    
    public function getLabel(){

        //menngembalikan nilai darii propertti judul dan penulis, this untuk mengambil di luar scopeuh
        return "$this->penulis,$this->penerbit";

    }

    public function getInfoLengkap(){
        //komik : Naruto \ Masashi Kashimoto, Sanden (Rp.300000) - 100 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        if( $this->tipe=="Komik"){
            $str.= " - {$this->jmlhalaman} Halaman.";
        } else if ( $this->tipe=="Game"){
            $str.= " ~ {$this->jmleps} eps.";
        }
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
$produk1 = new Produk("Naruto", "Masashi Kashimoto", "Sanden", 300000, 100, 0, "Komik");
$produk2 = new Produk("Basara", "Yu lis", "Yu Bit", 150000, 0, 360, "Game");

//panggil dari function getLabel
 /*echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Komik : ". $produk2->getLabel();

echo"<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
*/

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

?>