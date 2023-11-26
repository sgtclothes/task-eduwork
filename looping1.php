<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Tree</title>
</head>
<body>

<?php
// Looping untuk membuat pohon
for ($i = 0; $i <= 8; $i++) {
    // Looping untuk mencetak angka pada setiap baris
    for ($j = 0; $j <= $i; $j++) {
        echo $j . " ";
    }

    // Membuat baris baru
    echo "<br>";
}
?>

</body>
</html>
