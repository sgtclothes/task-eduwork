<?php 

// Tugas membuat 3 Macam Volume Bangun Ruang
// created by Mohamad Ardiansyah Rofii
// 25-07-2023

echo "Tugas PHP Operator - 5 Macam Volume Bangun Ruang<br>";
echo "Mohamad Ardiansyah Rofii";

echo "<br><br>";

// 1. Volume Kubus
// Rumus:
// V = s x s x s

$s = 5;

echo "1. Menghitung Volume Kubus <br>"; 
echo "Rumus: <br>"; 
echo "V = S<sup>3";
echo "<br>"; 
$v = $s * $s * $s;
echo "Volume = $s cm x $s cm x $s cm = $v cm";

echo "<br><br>";

// 2. Volume Balok
// Rumus:
// V = p (panjang) x l (lebar) x t (tinggi)

$p = 10;
$l = 5;
$t = 8;

echo "2. Menghitung Volume Balok <br>"; 
echo "Rumus: <br>"; 
echo "V = p (panjang) x l (lebar) x t (tinggi)";
echo "<br>"; 
$v = $p * $l * $t;
echo "Volume = $p cm x $l cm x $t cm = $v cm";

echo "<br><br>";

// 3. Volume Prisma
// Rumus:
// V = s x s x s

$la = 30;
$t = 5;

echo "2. Menghitung Volume Prisma <br>"; 
echo "Rumus: <br>"; 
echo "V = la (Luas Alas) x t (tinggi)";
echo "<br>"; 
$v = $la * $t;
echo "Volume = $la cm x $t cm = $v cm";
?>