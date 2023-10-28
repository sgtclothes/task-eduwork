<?php 
    $a = 5;
    $b = 8;
    $c = 4;

// 1. Bangun Ruang Volume Tabung
    $resultTabung = 3.14 * $b * $b * $c;
    echo "<b>Volume Tabung</b> </br>";
    echo "Rumus Volume Tabung = phi x jari-jari x jari-jari  x tinggi</br>";
    echo "Jari-jari = $b, Tinggi = $c </br>";
    echo "Hasil Volume Tabung = $resultTabung </br></br>";
    echo"============================================</br>";

// 2. Bangun Ruang Volume Kubus
    $resultKubus = $c * $c * $c;
    echo "<b>Volume Kubus</b> </br>";
    echo "Rumus Volume Kubus = Sisi x Sisi x Sisi </br>";
    echo "Sisi = $c </br>";
    echo "Hasil Volume Kubus = $resultKubus </br></br>";
    echo"============================================</br>";

// 3. Bangun Ruang Volume Balok
    $resultBalok = $a * $b * $c;
    echo "<b>Volume Balok</b> </br>";
    echo "Rumus Volume Balok = Panjang x Lebar x Tinggi </br>";
    echo "Panjang = $a, Lebar = $b, Tinggi = $c </br>";
    echo "Hasil Volume Balok = $resultBalok </br></br>";
?>