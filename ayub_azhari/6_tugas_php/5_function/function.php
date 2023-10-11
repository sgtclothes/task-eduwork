<?php

function luas_persegi($sisi) {
    $luas = $sisi * $sisi;
    echo "Rumus luas persegi adalah sisi x sisi.";
    echo "</br>";
    echo "Diketahui sebuah persegi memiliki panjang sisi $sisi cm. ";
    echo "Maka, luas persegi tersebut adalah $sisi x $sisi = $luas cm2.";
    echo "</br></br>";
}
luas_persegi(5);

function luas_persegi_panjang($panjang = 12, $lebar = 10) {
    $luas = $panjang * $lebar;
    echo "Rumus luas persegi adalah panjang x lebar.";
    echo "</br>";
    echo "Diketahui sebuah persegi memiliki panjang $panjang cm dan $lebar 5 cm. ";
    echo "Maka, luas persegi panjang tersebut adalah $panjang x $lebar = $luas cm2.";
    echo "</br></br>";
}
luas_persegi_panjang(10, 7);

function luas_segitiga($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    echo "Rumus luas segitiga adalah 1/2 x alas x tinggi.";
    echo "</br>";
    echo "Diketahui sebuah segitiga memiliki panjang alas $alas cm dan tinggi $tinggi cm. ";
    echo "Maka, luas segitiga tersebut adalah 1/2 x $alas x $tinggi = $luas cm2.";
    echo "</br></br>";
}
luas_segitiga(8, 12);

function volume_kubus($sisi = 16) {
    $volume = $sisi * $sisi * $sisi;
    echo "Rumus luas kubus adalah sisi x sisi x sisi.";
    echo "</br>";
    echo "Diketahui sebuah kubus memiliki panjang sisi $sisi cm. ";
    echo "Maka, luas kubus tersebut adalah $sisi x $sisi x $sisi = $volume cm3.";
    echo "</br></br>";
}
volume_kubus(8);

function volume_bola($jari_jari) {
    $volume = 4 * 3.14 * $jari_jari * $jari_jari;
    echo "Rumus luas bola adalah 4 x 22/7 x jari-jari x jari-jari.";
    echo "</br>";
    echo "Diketahui sebuah bola memiliki panjang jari-jari $jari_jari cm. ";
    echo "Maka, luas bola tersebut adalah 4 x 22/7 x jari-jari x jari-jari = $volume cm3.";
}
volume_bola(7.5);