<?php 
    // Menghitung 3 macam volume bangun ruang 
    echo "Menghitung 3 macam volume bangun ruang <br><br><br>"; 

    // Volume Kubus
    // V = s x s x s
    $sisi = 10;
    $V = $sisi * $sisi * $sisi;
    echo "1. Volume Kubus <br> $sisi * $sisi * $sisi = $V m3 <br><br>";


    // Volume Balok
    // V = p x l x t
    $p = 12;
    $l = 10;
    $t = 14;
    $V = $p * $l * $t;
    echo "2. Volume Balok <br> $p * $l * $t = $V m3 <br><br>";


    // Volume Bola
    // V = 4/3 x phi x r x r x r
    $r = 15;
    $V = 4/3 * 3.14 * $r * $r * $r;
    echo "1. Volume Bola <br> 4/3 * 3.14 * $r * $r * $r = $V m3 <br><br>";





?>