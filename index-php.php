<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <script>
        let a = "hello"
        a = a + "world"
        console.log(a)
    </script>
    <?php 
    echo(pi());
    ?>
    <br>
    <?php
    echo(min(0, 150, 30, 20, -8, -200));  // returns -200
    echo(max(0, 150, 30, 20, -8, -200));  // returns 150
    ?>
    <br>
    <?php
    echo(rand(1,10)); 
    ?>
    <br>
    <?php 
    $i =1;
    // echo ++$i;
    $i++;
    echo $i;
    ?>
    <br>
    <?php
    $i = "hello";
    $i = $i . " world";
    echo $i; 
    ?>
    <br>
    <?php 
    $i = 'hello';
    $x = $i === 'hello' ? 'oke' : 'tidak oke';
    echo $x; 
    ?>
</body>
</html>