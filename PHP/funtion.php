<?php 

    function data($p, $l, $t, $s, $a){
        $persegi = $p * $l;
        $panjang = $p * $l;
        $segitiga = $a * $t / 2;
        $kubus = $s * $s * $s;
        $balok = $p * $l * $t;
        echo "Luas Persegi adalah  $p * $l = $persegi <br>";
        echo "Luas Persegi Panjang adalah  $p * $l = $panjang <br>";
        echo "Luas Segitiga adalah  $a * $t / 2 = $segitiga <br>";
        echo "Luas Volume Kubus adalah  $s * $s * $s = $kubus <br>";
        echo "Luas Persegi adalah  $p * $l * $t = $balok <br>";

    }

    data(10, 6, 8, 4, 4);

?>