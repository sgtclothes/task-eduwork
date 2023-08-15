<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
      $bil1= 10;
      $b = 1;
      for($a=1;$b<=$bil1;$b++)
      {
          $total=$a*$b;
          echo "<p> $a x $b=$total";
      }
  ?>
</body>
</html>