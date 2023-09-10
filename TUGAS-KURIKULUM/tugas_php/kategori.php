<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung BMI</title>
</head>
<body>
    <?php 
    $nama = 'Refia Sapitri';
    $tinggi = 157;
    $berat = 51;

    $tinggi_meter = $tinggi / 100;
    $bmi = $berat / ($tinggi_meter * $tinggi_meter);

    if ($bmi < 18.5) {
        echo "Halo, ". $nama .". Nilai BMI Anda adalah ". number_format($bmi, 2). " Anda termasuk kurus";
    } else if ($bmi >= 18.5 && $bmi < 24.9) {
        echo "Halo, ". $nama .". Nilai BMI Anda adalah ". number_format($bmi, 2). " Anda termasuk sedang";
    } else {
        echo "Halo, ". $nama .". Nilai BMI Anda adalah ". number_format($bmi, 2). " Anda termasuk gemuk";
    }
    ?>
    
</body>
</html>
