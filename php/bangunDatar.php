<?php 

    // Menghitung 5 jenis bangun datar


    // Luas persegi
    // L = s x s
    $sisiP = 7;
    $L = $sisiP * $sisiP;
    echo "1. Luas persegi <br> $sisiP * $sisiP = $L  <br><br>";
    
    
    // Luas persegi panjang
    // L = p x l
    $panjang = 4;
    $lebar = 5;
    $L = $panjang * $lebar;
    echo "2. Luas persegi panjang <br> $panjang * $lebar = $L <br><br>";


    // Luas jajar genjang
    // L = a x t
    $alas = 9;
    $tinggi = 7;
    $L = $alas * $tinggi;
    echo "3. Luas jajar genjang <br>$alas * $tinggi = $L <br><br>";


    // Luas segitiga
    // L = 1/2 x a x t
    $alas = 9;
    $tinggi = 7;
    $L = 1/2 * $alas * $tinggi;
    echo "4. Luas segitiga <br> 1/2 *$alas * $tinggi = $L <br><br>";


    // Luas lingkaran
    // L = phi x r x r
    $jari = 8;
    $L = 3.14 * $jari * $jari;
    echo "5. Luas lingkaran <br> 3.14 * $jari * $jari = $L <br><br>";

?>