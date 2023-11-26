<?php


function luasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}


function luasPersegi($sisi) {
    return $sisi * $sisi;
}


function luasLingkaran($jariJari) {
    return M_PI * $jariJari * $jariJari;
}


function volumeBalok($panjang, $lebar, $tinggi) {
    return $panjang * $lebar * $tinggi;
}


function volumeBola($jariJari) {
    return (4 / 3) * M_PI * $jariJari * $jariJari * $jariJari;
}


echo "Luas Segitiga: " . luasSegitiga(5, 8) . "<br>";
echo "Luas Persegi: " . luasPersegi(4) . "<br>";
echo "Luas Lingkaran: " . luasLingkaran(6) . "<br>";
echo "Volume Balok: " . volumeBalok(3, 4, 5) . "<br>";
echo "Volume Bola: " . volumeBola(2) . "<br>";

?>
