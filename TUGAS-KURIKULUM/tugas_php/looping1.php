<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping-1</title>
</head>
<body>
    <?php
    for ($i = 0; $i <= 10; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
    ?>
</body>
</html>