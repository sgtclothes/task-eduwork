<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
$nama = "Adi Tiya Wiranda";
$jenis_kelamin = "Laki-laki";
$tahun_lahir = 2001;
$umur = date('Y') - $tahun_lahir;

if($jenis_kelamin == "Laki-laki") {
    echo "Selamat Pagi Tuan, Tuan $nama <br>";
    echo "Umur anda sekarang adalah $umur";
} else {
    echo "Selamat Pagi Nyonya, Nyonya $nama <br>";
    echo "umur anda sekarang adalah $umur <br>";
}
echo "<br>";
$menu = 1;
$bilangan1 = 10;
$bilangan2 = 5;

if ($menu == 1) {
 echo $bilangan1 + $bilangan2;
} else if ($menu == 2){
    echo $bilangan1 - $bilangan2;
} else if ($menu == 3) {
    echo $bilangan1 * $bilangan2;
} else if ($menu == 4) {
    echo $bilangan1 / $bilangan2;
}

echo "<br>";


    $bil1= 2;
    for($a=1;$a<=$bil1;$a++)
    {
        for($b=1;$b<=$bil1;$b++)
        {
        $total=$a*$b;
        echo "<p> $a x $b=$total";
        }
    }
?>


</body>

</html>

