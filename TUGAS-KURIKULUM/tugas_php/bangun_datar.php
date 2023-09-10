<!DOCTYPE html>
<html>
<head>
    <title>Luas Bangun Datar</title>
</head>
<body>
    <h1>Luas Bangun Datar</h1>

    <?php
    $a = 8; 
    $b = 2; 

   
    $luasPersegi = $a * $a;
    $luasPersegiPanjang = $a * $b;
    $luasSegitiga = 0.5 * $a * $b;
    $luasLingkaran = 3.14 * $a * $a;
    $luasTrapesium = 0.5 * ($a + $b) * $b;

    
    echo "Luas Persegi: " . $luasPersegi . "<br>";
    echo "Luas Persegi Panjang: " . $luasPersegiPanjang . "<br>";
    echo "Luas Segitiga: " . $luasSegitiga . "<br>";
    echo "Luas Lingkaran: " . $luasLingkaran . "<br>";
    echo "Luas Trapesium: " . $luasTrapesium . "<br>";
    ?>

</body>
</html>
