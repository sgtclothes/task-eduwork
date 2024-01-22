<?php 
    // syntax dasar php
    echo "syntax dasar php <br>";
    $umur = 20;
    echo "umur saya"." ". $umur; 
    
    echo "<br><br><br><hr>";

    // operator artimatika
    echo "operator artimatika<br>";
    $a = 5;
    $b = 2;
    // penjumlahan +
    echo "penjumlahan +<br>";
    $c = $a + $b;
    echo "$a + $b = $c";
    echo "<hr>";
    // pengurangan -
    echo "pengurangan -<br>";
    $c = $a - $b;
    echo "$a - $b = $c";
    echo "<hr>";
    // perkalian *
    echo "perkalian *<br>";
    $c = $a * $b;
    echo "$a * $b = $c";
    echo "<hr>";
    // pangkat **
    echo "pangkat **<br>";
    $c = $a ** $b;
    echo "$a ** $b = $c";
    echo "<hr>";
    // pembagian /
    echo "pembagian /<br>";
    $c = $a / $b;
    echo "$a / $b = $c";
    echo "<hr>";
    // sisa bagi %
    echo "sisa bagi %<br>";
    $c = $a % $b;
    echo "$a % $b = $c";
    echo "<hr>";

    echo "<br><br><br>";
    
    // operator increment dan decrement
    echo "operator increment dan decrement<br>";
    $score = 0;
    
    $score++;
    $score++;
    $score++;
    echo $score; //hasil outputnya 3,


    echo "<br><br><br><hr>";
    // operator logika
    echo "operator logika<br>";
    echo "true = 1<br>";
    echo "false = 0<br><br>";
    // lebih besar >
    $c = $a > $b;
    echo "$a > $b = $c";
    echo "<hr>";
    // lebih kecil <
    $c = $a < $b;
    echo "$a < $b = $c";
    echo "<hr>";
    // sama dengan ==
    $c = $a == $b;
    echo "$a == $b = $c";
    echo "<hr>";
    // tidak sama dengan !=
    $c = $a != $b;
    echo "$a != $b = $c";
    echo "<hr>";
    // lebih besar sama dengan >=
    $c = $a >= $b;
    echo "$a >= $b = $c";
    echo "<hr>";
    // lebih besar sama dengan >=
    $c = $a <= $b;
    echo "$a <= $b = $c";
    echo "<hr>";

?>