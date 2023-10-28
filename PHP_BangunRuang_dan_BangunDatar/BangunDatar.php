<?php 
    $a = 5;
    $b = 8;
    $c = 4;

// 1. Luas Persegi
    $resultPersegi = $a * $a;
    echo "<b>Luas Pesegi</b> </br>";
    echo "Rumus Luas = Sisi x Sisi </br>";
    echo "Sisi = $a </br>";
    echo "Hasil Luas Persegi Panjang = $resultPersegi </br></br>";
    echo"============================================</br>";

// 2. Luas Persegi Panjang 
    $resultPersegiPanjang = $a * $b;
    echo "<b>Luas Pesegi Panjang</b> </br>";
    echo "Rumus Luas = Panjang x Lebar </br>";
    echo "Panjang = $a, Lebar = $b </br>";
    echo "Hasil Luas Persegi Panjang Panjang = $resultPersegiPanjang </br></br>";
    echo"============================================</br>";

// 3. Luas Segitiga
    $resultSegitiga = 0.5 * $a * $c;
    echo "<b>Luas Segitiga</b> </br>";
    echo "Rumus Luas = 1/2 x Alas x Tinggi </br>";
    echo "Alas = $a, Tinggi = $c </br>";
    echo "Hasil Luas Segitiga = $resultSegitiga </br></br>";
    echo"============================================</br>";

// 4. Luas Belah Ketupat
    $resultBelahKetupat = 0.5 * $b * $c;
    echo "<b>Luas Belah Ketupat</b> </br>";
    echo "Rumus Luas = 1/2 x Diagonal 1 x Diagonal 2 </br>";
    echo "D 1 = $b, D 2 = $c </br>";
    echo "Hasil Luas Belah Ketupat = $resultBelahKetupat </br></br>";
    echo"============================================</br>";

// 5. Luas Lingkaran
    $resultLingkaran = 3.14 * $c * $c;
    echo "<b>Luas Lingkaran</b> </br>";
    echo "Rumus Luas = phi x r x r </br>";
    echo "r = $c </br>";
    echo "Hasil Luas Lingkaran = $resultLingkaran";
?>