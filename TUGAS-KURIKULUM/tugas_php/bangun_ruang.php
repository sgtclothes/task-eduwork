<!DOCTYPE html>
<html>
<head>
    <title>Volume Bangun Ruang</title>
</head>
<body>
    <h1>Volume Bangun Ruang</h1>

    <?php
    $a = 3; 
    $b = 4; 

  
    $volumeKubus = $a * $a * $a;
    $volumeBalok = $a * $b * $a;
    $radiusBola = $a / 2;
    $volumeBola = (4/3) * 3.14 * $radiusBola * $radiusBola * $radiusBola;

    echo "Volume Kubus: " . $volumeKubus . "<br>";
    echo "Volume Balok: " . $volumeBalok . "<br>";
    echo "Volume Bola: " . $volumeBola . "<br>";
    ?>

</body>
</html>
