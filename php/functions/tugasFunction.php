<?php 

    // Membuat 5 function untuk menghitung rumus rumus ruang dan bangun datar
    function luas_persegi($sisi){
        echo "<h4>Mengitung Luas Bangun Datar</h4>";
        // Luas persegi
        // L = s x s
        $Luas = $sisi * $sisi;
        echo "1. Menghitung Luas persegi <br> $sisi * $sisi = $Luas";
    }
    luas_persegi(20);
    echo "<br><br>";

    function luas_persegi_panjang($panjang = 12, $lebar = 8){
        // Luas persegi panjang
        // L = p x l
        $Luas = $panjang * $lebar;
        echo "2. Luas persegi panjang <br> $panjang * $lebar = $Luas";
    }
    
    luas_persegi_panjang();
    echo "<br><br>";
    
    function luas_jajar_genjang(){
        // Luas jajar genjang
        // L = a x t
        $alas = 9;
        $tinggi = 7;
        $L = $alas * $tinggi;
        echo "3. Luas jajar genjang <br>$alas * $tinggi = $L";
    }
    luas_jajar_genjang();
    echo "<br><br>";
    
    function luas_segitiga($alas, $tinggi){
        // Luas segitiga
        // L = 1/2 x a x t
        $L = 1/2 * $alas * $tinggi;
        echo "4. Luas segitiga <br> 1/2 * $alas * $tinggi = $L ";
    }
    luas_segitiga(23, 24);
    echo "<br><br>";

    function luas_lingkarang($jari = 54){
        // Luas lingkaran
        // L = phi x r x r
        $L = 3.14 * $jari * $jari;
        echo "5. Luas lingkaran <br> 3.14 * $jari * $jari = $L";
    }
    luas_lingkarang();
    echo "<br><br><br>";


    

    function vol_kubus(){
        echo "<h4>Mengitung Volume Bangun Ruang</h4>";
        // Volume Kubus
        // V = s x s x s
        $sisi = 10;
        $V = $sisi * $sisi * $sisi;
        echo "1. Volume Kubus <br> $sisi * $sisi * $sisi = $V m3";
    }
    vol_kubus();
    echo "<br><br>";

    function vol_balok($p, $l, $t){
        // Volume Balok
        // V = p x l x t
        $V = $p * $l * $t;
        echo "2. Volume Balok <br> $p * $l * $t = $V m3";
    }
    vol_balok(12, 13, 14);
    echo "<br><br>";

    function vol_bola($r = 15){
        // Volume Bola
    // V = 4/3 x phi x r x r x r
    $r = 15;
    $V = 4/3 * 3.14 * $r * $r * $r;
    echo "1. Volume Bola <br> 4/3 * 3.14 * $r * $r * $r = $V m3";
    }
    vol_bola();
    echo "<br><br>";

?>