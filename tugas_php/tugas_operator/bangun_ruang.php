<?php

//volume kubus
$sisi = 4;

$volume_kubus = pow($sisi, 3);

echo "Volume Kubus: $volume_kubus";
echo "<hr>";

//volume balok
$panjang = 5;
$lebar = 3;
$tinggi = 6;

$volume_balok = $panjang * $lebar * $tinggi;

echo "Volume Balok: $volume_balok";
echo "<hr>";

//volume tabung
$jari_jari = 2;
$tinggi_tabung = 8;

$volume_tabung = M_PI * pow($jari_jari, 2) * $tinggi_tabung;

echo "Volume Tabung: $volume_tabung";
echo "<hr>"
?>