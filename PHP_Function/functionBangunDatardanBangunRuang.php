<?php 
// 1. Luas Persegi
    function LuasPersegi( int $sisi ){
        $resultPersegi = $sisi * $sisi;
        echo "<b>Luas Pesegi</b> </br>";
        echo "Rumus Luas = Sisi x Sisi </br>";
        echo "Sisi = $sisi </br>";
        echo "Hasil Luas Persegi Panjang = $resultPersegi </br></br>";
    }

// 2. Luas Persegi Panjang 
    function LuasPersegiPanjang( int $panjang, int $lebar ){
        $resultPersegiPanjang = $panjang * $lebar;
        echo "<b>Luas Pesegi Panjang</b> </br>";
        echo "Rumus Luas = Panjang x Lebar </br>";
        echo "Panjang = $panjang, Lebar = $lebar </br>";
        echo "Hasil Luas Persegi Panjang Panjang = $resultPersegiPanjang </br></br>";
    }

// 3. Luas Segitiga
    function LuasSegitiga( int $alas, int $tinggi){
        $resultSegitiga = 0.5 * $alas * $tinggi;
        echo "<b>Luas Segitiga</b> </br>";
        echo "Rumus Luas = 1/2 x Alas x Tinggi </br>";
        echo "Alas = $alas, Tinggi = $tinggi </br>";
        echo "Hasil Luas Segitiga = $resultSegitiga </br></br>";
    }

// 4. Bangun Ruang Volume Kubus
    function VolumeKubus(int $sisi){
        $resultKubus = $sisi * $sisi * $sisi;
        echo "<b>Volume Kubus</b> </br>";
        echo "Rumus Volume Kubus = Sisi x Sisi x Sisi </br>";
        echo "Sisi = $sisi </br>";
        echo "Hasil Volume Kubus = $resultKubus </br></br>";
    }

// 5. Bangun Ruang Volume Balok
    function VolumeBalok( int $panjang, int $lebar, int $tinggi){
        $resultBalok = $panjang * $lebar * $tinggi;
        echo "<b>Volume Balok</b> </br>";
        echo "Rumus Volume Balok = Panjang x Lebar x Tinggi </br>";
        echo "Panjang = $panjang, Lebar = $lebar, Tinggi = $tinggi </br>";
        echo "Hasil Volume Balok = $resultBalok </br></br>";
    }

    LuasPersegi(6);
    LuasPersegiPanjang(7,3);
    LuasSegitiga(8,6);
    VolumeKubus(9);
    VolumeBalok(8,4,2);
?>