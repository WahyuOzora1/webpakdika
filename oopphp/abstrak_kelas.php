<?php 
//jualan produk
//komik
//Game

//abstrak class
abstract class Produk {
    //public, private variabel adalah poperty
    private $judul,
           $penulis,
           $harga,
           $penerbit,
           $diskon=0;

    //metode khusus untuk menjalankan instance kelas yang ada dalam parameter
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga=0, $diskon=0){
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

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }
  

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon/100);
    }

     abstract public function getInfoProduk(); //Isinya ada di method turunannnya

     public function getInfo() {
        //komik : Naruto \ Masashi Kashimoto, Sanden (Rp.300000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        return $str;
    }

    //Setter adn getter
    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
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
        $str = "Komik : ". $this->getInfo() . " - {$this->jmlhalaman} Halaman."; //pemanggilan parent getInfoProduk
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
        $str = "Game : ". $this->getInfo() . " ~ {$this->jmleps} eps.";
        return $str;
    }
}

//OBJECT TYPE
// produk $produk fungsi cetak hanya menerima dari kelas produk
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
//instance variabel
$produk1 = new Komik("Naruto", "Masashi Kashimoto", "Sanden", 300000, 100);
$produk2 = new Game("Basara", "Yu lis", "Yu Bit", 150000, 360);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1); //jalanin fungsi tambahProduk
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

?>

