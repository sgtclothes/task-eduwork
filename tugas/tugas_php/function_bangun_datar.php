<?php
function luas_persegi($a){

    $c = $a * $a;

    echo "luas persegi <br>";
    echo "$a * $a = $c";
    echo "<hr>";
}
function luas_segitiga($a, $b){

    $c = 1/2 * $a * $b;
    echo "luas segitiga <br>";
    echo " 1/2 * $a * $b = $c";
    echo "<hr>";
}
function luas_lingkaran($a){

    $c = 3.14 * $a**2;
    echo "luas lingkaran <br>";
    echo " 3.14 * $a**2 = $c";
    echo "<hr>";
}
function luas_jajargenjang($a, $b){

    $c = $a * $b;
    echo "luas jajar genjang <br>";
    echo " $a * $b = $c";
    echo "<hr>";
}
function luas_trapesium($a, $b, $d){

    $c = 1/2 * ($a + $b) * $d;
    echo "luas trapesium <br>";
    echo " 1/2 * ($a + $b) * $d = $c";
    echo "<hr>";
}
luas_persegi(6);
luas_segitiga(6, 8);
luas_lingkaran(6);
luas_jajargenjang(6, 8);
luas_trapesium(6, 8, 7);

?>