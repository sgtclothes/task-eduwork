<?php

$nama = 'Rizal';
$bb = 70;
$tb = 1.63;

$bmi = $bb/($tb**2);

if($bmi < 18.5) {
    echo "Halo, $nama. Nilai BMI anda adalah $bmi. Anda termasuk kurus.";
}
elseif ($bmi > 18.5 && $bmi < 25) {
    echo "Halo, $nama. Nilai BMI anda adalah $bmi. Anda termasuk sedang.";
}
else {
    echo "Halo, $nama. Nilai BMI anda adalah $bmi. Anda termasuk gemuk.";
}

?>