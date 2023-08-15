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

    echo "<br>";
    
    $star=10;
	for($a=$star;$a>0;$a--){
	for($b=$star;$b>=$a;$b--){
		echo "*";
	}
	echo "<br>";
	}

    echo "<br>";

    for($no=1;$no<=10;$no++){
        if($no % 2 == 0){
            echo "$no ";echo "adalah bilangan genap<br>";
        }
        else{
            echo "$no  ";echo "adalah bilangan ganjil<br>";
        }
    }


    function nama(){
        echo "Nama Saya adit";
    }

    echo nama();

  ?>
</body>
</html>