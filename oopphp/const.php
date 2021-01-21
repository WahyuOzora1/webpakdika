<?php 

define ('NAME', 'VALUE'); //tidak bisa dimasukkan dalam kelas
echo NAME;

echo "<br>";

const NAMA = "Wahjoe"; //bisa dimasukkan dalam kelas
echo NAMA;

class Apaya {
    const DOI = "Tisa";
}


echo "<hr>";
echo Apaya :: DOI;

echo __LINE__;

?>