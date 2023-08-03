<?php

function persegi($sisi) {
    return  $sisi * $sisi;
}

echo "luas persegi: " . persegi(10) . "<br>";

function persegi_panjang($panjang, $lebar)
{
    return  $panjang * $lebar;
}

echo "luas persegi panjang: " . persegi_panjang(10, 20) . "<br>";

function segitiga($alas, $tinggi)
{
    return ($alas*$tinggi) / 2;
}

echo "luas segitiga: " . segitiga(10, 5) . "<br>";

function jajar_genjang($alas, $tinggi)
{
    return ($alas*$tinggi);
}

echo "luas jajar genjang: " . jajar_genjang(10, 5) . "<br>";

function belah_ketupat($d1, $d2)
{
    return ($d1*$d2) / 2;
}

echo "luas jajar belah ketupat: " . belah_ketupat(10, 5);