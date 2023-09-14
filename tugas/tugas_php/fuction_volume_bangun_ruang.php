<?php
function volume_kubus($a){

    $c = $a * $a * $a;
echo "volume kubus <br>";
echo "$a * $a * $a = $c";
echo "<hr>"; 
}
function volume_balok($a, $b, $d){

    $c = $a * $b * $d ;
echo "volume balok <br>";
echo " $a * $b * $d = $c";
echo "<hr>";
}
function volume_bola($a){

    $c = 4/3 * 3.14 * $a**3;
echo "volume bola <br>";
echo " 4/3 * 3.14 * $a**3 = $c";
echo "<hr>";
}
function volume_prisma($a, $b){

    $c = $a * $b;
    echo "volume prisma <br>";
    echo " $a * $b = $c";
    echo "<hr>";
}
function volume_tabung($a, $b){

    $c = 3.14 * $a *$a * $b;
    echo "volume_tabung <br>";
    echo " 3.14 * $a * $a * $b = $c";
    echo "<hr>";
}
volume_kubus(6);
volume_balok(6, 8, 7);
volume_bola(6);
volume_prisma(10, 16);
volume_tabung(6, 8);

?>

