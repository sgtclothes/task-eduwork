<?php

/////////BANGUN DATAR//////////

echo "BANGUN DATAR <br><br>";

echo "Menghitung Luas Persegi Panjang <br>";
function luasPersegiPanjang($panjang, $lebar) {
    echo "Panjang: $panjang<br>";
    echo "Lebar: $lebar<br>";
    return $panjang * $lebar;
}
$luasPersegiPanjang = luasPersegiPanjang(5, 8);
echo "Luas Persegi Panjang: $luasPersegiPanjang<br><br>";

echo "Menghitung Luas Segitiga <br>";
function luasSegitiga($alas, $tinggi) {
    echo "Alas: $alas<br>";
    echo "Tinggi: $tinggi<br>";
    return 0.5 * $alas * $tinggi;
}
$luasSegitiga = luasSegitiga(6, 4);
echo "Luas Segitiga: $luasSegitiga<br><br>";

echo "Menghitung Luas Lingkaran <br>";
function luasLingkaran($jariJari) {
    echo "Jari-Jari: $jariJari<br>";
    return M_PI * $jariJari * $jariJari;
}
$luasLingkaran = luasLingkaran(3);
echo "Luas Lingkaran: $luasLingkaran<br><br>";

echo "Menghitung Luas Trapesium <br>";
function luasTrapesium($sisi1, $sisi2, $tinggi) {
    echo "Sisi1: $sisi1<br>";
    echo "Sisi2: $sisi2<br>";
    echo "Tinggi: $tinggi<br>";
    return 0.5 * ($sisi1 + $sisi2) * $tinggi;
}
$luasTrapesium = luasTrapesium(4, 7, 5);
echo "Luas Trapesium: $luasTrapesium<br><br>";

echo "Menghitung Luas Jajar Genjang <br>";
function luasJajarGenjang($alas, $tinggi) {
    echo "Alas: $alas<br>";
    echo "Tinggi: $tinggi<br>";
    return $alas * $tinggi;
}
$luasJajarGenjang = luasJajarGenjang(9, 6);
echo "Luas Jajar Genjang: $luasJajarGenjang<br><br>";

/////////BANGUN RUANG//////////

echo "BANGUN RUANG <br><br>";

echo "Menghitung Volume Kubus <br>";
function volumeKubus($sisi) {
    echo "Sisi: $sisi<br>";
    return $sisi * $sisi * $sisi;
}
$volumeKubus = volumeKubus(3);
echo "Volume Kubus: $volumeKubus<br><br>";

echo "Menghitung Volume Balok <br>";
function volumeBalok($panjang, $lebar, $tinggi) {
    echo "Panjang: $panjang<br>";
    echo "Lebar: $lebar<br>";
    echo "Tinggi: $tinggi<br>";
    return $panjang * $lebar * $tinggi;
}
$volumeBalok = volumeBalok(4, 5, 6);
echo "Volume Balok: $volumeBalok<br><br>";

echo "Menghitung Volume Bola <br>";
function volumeBola($jariJari) {
    echo "Jari-Jari: $jariJari<br>";
    return (4 / 3) * M_PI * $jariJari * $jariJari * $jariJari;
}
$volumeBola = volumeBola(2);
echo "Volume Bola: $volumeBola<br><br>";

echo "Menghitung Volume Tabung <br>";
function volumeTabung($jariJari, $tinggi) {
    echo "Jari-Jari: $jariJari<br>";
    echo "Tinggi: $tinggi<br>";
    return M_PI * $jariJari * $jariJari * $tinggi;
}
$volumeTabung = volumeTabung(3, 8);
echo "Volume Tabung: $volumeTabung<br><br>";

echo "Menghitung Volume Kerucut <br>";
function volumeKerucut($jariJari, $tinggi) {
    echo "Jari-Jari: $jariJari<br>";
    echo "Tinggi: $tinggi<br>";
    return (1 / 3) * M_PI * $jariJari * $jariJari * $tinggi;
}
$volumeKerucut = volumeKerucut(4, 7);
echo "Volume Kerucut: $volumeKerucut<br><br>";

?>
