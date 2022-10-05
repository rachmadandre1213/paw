<?php
#inisiasi dan inisialisasi variabel 
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c; 

#tampilkan data dengan perintah echo
echo "variabel a: {$a} <br>";
echo "variabel b: {$b} <br>";
echo "variabel c: {$c} <br>";
echo "variabel d: {$d} <br>";
echo "variabel e: {$e} <br>";

#mengetahui tipe data dari variabel 
var_dump($e);
?>