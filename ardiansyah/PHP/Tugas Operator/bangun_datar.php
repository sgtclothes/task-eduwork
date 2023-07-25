<?php 

// Tugas membuat 5 Macam luas Jenis Bangun Datar
// created by Mohamad Ardiansyah Rofii
// 25-07-2023

echo "Tugas PHP Operator - 5 Macam Jenis Luas Bangun Datar<br>";
echo "Mohamad Ardiansyah Rofii";

echo "<br><br>";
// 1. Luas Persegi
// Rumus:
// L = S x S

$s = 5;

echo "1. Menghitung Luas Persegi <br>"; 
echo "Rumus: <br>"; 
echo "L = S (sisi) x S (sisi)";
echo "<br>"; 
$L = $s * $s;
echo "Luas = $s cm x $s cm = $L cm";

echo "<br><br>";

// 2. Luas Persegi Panjang
// Rumus:
// L = p (panjang) x l (lebar)
$p = 10;
$l = 5;
echo "2. Menghitung Luas Persegi Panjang <br>"; 
echo "Rumus: <br>"; 
echo "L = p (panjang) x l (lebar)";
echo " <br>"; 
$L = $p * $l;
echo "Luas = $p cm x $l cm = $L cm";

echo "<br><br>";

// 3. Luas Segitiga
// Rumus:
//  L = ½ x a x t
$a = 10;
$t = 5;
echo "3. Menghitung Luas Segitiga <br>"; 
echo "Rumus: <br>"; 
echo "L = 1/2 x a (alas) × t (tinggi)";
echo " <br>"; 
$L = 0.5 * $a * $t;
echo "Luas = 1/2 x $a cm x $t cm = $L cm";

echo "<br><br>";

// 3. Jajar Genjang
// Rumus:
// L = a x t
$a = 7;
$t = 5;
echo "4. Menghitung Luas Jajar Genjang <br>"; 
echo "Rumus: <br>"; 
echo "L = a (alas) × t (tinggi)";
echo " <br>"; 
$L = $a * $t;
echo "Luas = $a cm x $t cm = $L cm";

echo "<br><br>";

// 5. Trapesium
// Rumus:
// L = 1/2 x jumlah sisi sejajar x t
$r1 = 7;
$r2 = 5;
$t = 10;
echo "5. Menghitung Luas Trapesium <br>"; 
echo "Rumus: <br>"; 
echo "L = 1/2 x (rusuk1 * rusuk2) x t";
echo " <br>"; 
$L = 0.5 * ($r1 * $r2) * $t;
echo "Luas = 1/2 * ($r1 * $r2) cm * $t cm = $L cm";

?>