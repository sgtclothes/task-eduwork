<?php

//luas persegi
$sisi = 5;

$luas_persegi = $sisi*$sisi;

echo "Luas Persegi: $luas_persegi";
echo "<hr>";

//luas persegi panjang
$panjang = 5;
$lebar = 3;

$luas_persegi_panjang = $panjang * $lebar;

echo "Luas Persegi Panjang: $luas_persegi_panjang";
echo "<hr>";

//luas segitiga
$alas = 6;
$tinggi = 4;

$luas_segitiga = 0.5 * $alas * $tinggi;

echo "Luas Segitiga: $luas_segitiga";
echo "<hr>";

//luas lingkaran
$jari_jari = 3;

$luas_lingkaran = M_PI * $jari_jari * $jari_jari;

echo "Luas Lingkaran: $luas_lingkaran";
echo "<hr>";

//luas trapesium
$panjang_sisi_atas = 5;
$panjang_sisi_bawah = 8;
$tinggi_trapesium = 6;

$luas_trapesium = 0.5 * ($panjang_sisi_atas + $panjang_sisi_bawah) * $tinggi_trapesium;

echo "Luas Trapesium: $luas_trapesium";
echo "<hr>";

?>