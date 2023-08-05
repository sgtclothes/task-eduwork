<?php

function kubus($sisi) {
    return pow($sisi,3);
}

echo "volume kubus: " . kubus(20) . "<br>";

function balok($panjang, $lebar, $tinggi)
{
    return $panjang * $lebar * $tinggi;
}

echo "volume balok: " . balok(20,20,10) . "<br>";

function tabung($jari,$tinggi)
{
    return floor(pi() * pow($jari,2) * $tinggi);
}

echo "volume tabung: " . tabung(10,90) . "<br>";

function kerucut($jari,$tinggi)
{
    return floor((pi() * pow($jari,2) * $tinggi)/3);
}

echo "volume kerucut: " . kerucut(10,90) . "<br>";

function bola($jari)
{
    return floor((pi() * pow($jari,3) * (4/3) ));
}

echo "volume bola: " . bola(20) . "<br>";