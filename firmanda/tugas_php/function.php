<?php
// balok p * l * t
function balok($p,$l,$t){
    $hasil = $p * $l * $t;
    echo " rumus balok<br>";
    echo "$p * $l * $t = $hasil<br>";
}
// kubus s * s * s 
function kubus($s){
    $hasil = $s * $s * $s;
    echo " rumus kubus<br>";
    echo "$s * $s * $s = $hasil<br>";
}
// tabung 3.14 * r * r * t
function tabung($r,$t){
    $hasil = 3.14 * $r * $r * $t;
    echo " rumus tabung<br>";
    echo "3.14 * $r * $r * $t = $hasil<br>";
}
// piramida a * t * t2 / 3
function piramida($a,$t,$t2){
    $hasil = $a * $t * $t2 /3;
    echo " rumus piramida<br>";
    echo "$a * $t * $t2 /3 = $hasil<br>";
}
// bola 3.14 *4 *r *r *r/3
function bola($r){
    $hasil = $r * $r * $r *4 /3;
    echo " rumus bola<br>";
    echo "$r * $r * $r *4 /3 = $hasil<br>";
}

// lingkaran 3.14 * r * r
function lingkaran($r){
    $hasil = 3.14 * $r * $r;
    echo " rumus lingkaran<br>";
    echo "3.14 * $r * $r = $hasil<br>";

}
// persegi s * s
function persegi($s){
    $hasil = $s * $s;
    echo " rumus persegi<br>";
    echo "$s * $s = $hasil<br>";

}
// persegi panjang p * l
function persegiPanjang($p,$l){
    $hasil = $p * $l;
    echo " rumus persegi panjang<br>";
    echo "$p * $l = $hasil<br>";
}
// belah ketupat d1 * d2 / 2
function belahKetupat($d1,$d2){
    $hasil = $d1 * $d2 / 2;
    echo " rumus belah ketupat<br>";
    echo "$d1 * $d2 / 2 = $hasil<br>";
}
// segitiga a * t / 2
function segitiga($a,$t){
    $hasil = $a * $t / 2;
    echo " rumus segitiga<br>";
    echo "$a * $t / 2 = $hasil<br>";
}

segitiga(12,6);
belahKetupat(5,10);
persegiPanjang(6,8);
persegi(5);
lingkaran(14);
bola(7);
piramida(10,9,6);
tabung(4,8);
kubus(10);
balok(3,7,5);
?>