<?php
function luas_persegi($sisi){
    $hasil = $sisi * $sisi;
    echo "$sisi X $sisi = $hasil";
    echo "<hr>";
}
luas_persegi(10);

function keliling_persegi($sisi){
    $hasil = 4 * $sisi;
    echo "4 X $sisi = $hasil";
    echo "<hr>";
}
keliling_persegi(20);

function volume_kubus($sisi){
    $hasil = $sisi * $sisi * $sisi;
    echo "$sisi * $sisi * $sisi = $hasil";
    echo "<hr>";
}
volume_kubus(25);

function volume_limas($luas_alas, $tinggi){
    $hasil =(1/3) * $luas_alas * $luas_alas * $tinggi;
    echo "(1/3) * $luas_alas * $luas_alas * $tinggi = $hasil";
    echo "<hr>";
}
volume_limas(10, 15);

function volume_prisma($luas_alas, $tinggi_prisma, $tinggi_asegitiga){
    $hasil =(1/2) * $luas_alas * $tinggi_asegitiga * $tinggi_prisma;
    echo "(1/2) * $luas_alas * $tinggi_asegitiga * $tinggi_prisma = $hasil";
    echo "<hr>";
}
volume_prisma(18, 25, 12);
?>