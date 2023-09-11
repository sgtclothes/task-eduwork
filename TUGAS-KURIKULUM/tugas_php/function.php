<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Function</title>
</head>
<body>
    <?php 
    function persegi($sisi){
        $luas_persegi = $sisi * $sisi;
        echo "Luas Persegi adalah $luas_persegi";
    }
    persegi(5); 
    echo "<br>";

    function persegi_panjang($a, $b){
        $luas_persegi_panjang = $a * $b;
        echo "Luas Persegi Panjang adalah $luas_persegi_panjang";
    }
    persegi_panjang(5, 7);
    echo "<br>";

    function segitiga($a, $b){
        $luasSegitiga = 0.5 * $a * $b;
        echo "Luas Segitiga adalah $luasSegitiga";
    }
    segitiga(5, 7);
    echo "<br>";

    function lingkaran($a){
        $luasLingkaran = 3.14 * $a * $a;
        echo "Luas Lingkaran adalah $luasLingkaran";
    }
    lingkaran(7);
    echo "<br>";

    function trapesium($a, $b){
        $luasTrapesium = 0.5 * ($a + $b) * $b;
        echo "Luas Trapesium adalah $luasTrapesium";
    }
    trapesium(7, 8);
    echo "<br>";

    function kubus($a){
        $volumeKubus = $a * $a * $a;
        echo "Volume Kubus adalah $volumeKubus";
    }
    kubus(8);
    echo "<br>";

    function balok($a, $b){
        $volumeBalok = $a * $b * $a;
        echo "Volume Balok adalah $volumeBalok";
    }
    balok(8, 9);
    echo "<br>";

    function bola($a){
        $radiusBola = $a / 2;
        echo "Radius Bola adalah $radiusBola";
    }
    bola(7);
    echo "<br>";

    function volumeBola($a){
        $radiusBola = $a / 2;
        $volumeBola = (4/3) * 3.14 * $radiusBola * $radiusBola * $radiusBola;
        echo "Volume Bola adalah $volumeBola";
    }
    volumeBola(7);
    echo "<br>";

    function volumeTabung($a, $b) {
        $volume = 3.14 * $a * $a * $b;
        echo "Volume Tabung adalah $volume";
    }
    volumeTabung(10, 7);

    ?>
</body>
</html>