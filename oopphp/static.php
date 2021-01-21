<?php 
//static keyword nilainya selalu tetap meskipun object di instance berulang kali, terika pda kelas bukan objek
class contohStatic {
    public static $angka = 1;

    public static function halo(){
        return "Hallo" . self::$angka++ . "hahah"; //untuk mengambil properti angka sebenarnya biasanya pakai this cuma ga instance jadi pake self
    }
}

echo contohStatic:: $angka; //tidak perlu instance class (new)
echo "<br>";
echo contohStatic :: halo();
echo "<br>";
echo contohStatic :: halo();

?>