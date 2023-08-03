<?php

$nama = "tama";
$berat_badan = 90;
$tinggi_badan = 1.65;
$bmi = round($berat_badan / ($tinggi_badan * $tinggi_badan), 2);

if ($bmi < 18.5) {
    echo "Halo, $nama . Nilai BMI anda adalah $bmi, anda termasuk kurus";
} elseif ($bmi <= 24.9) {
    echo "Halo, $nama . Nilai BMI anda adalah $bmi, anda termasuk sedang";
} else {
    echo "Halo, $nama . Nilai BMI anda adalah $bmi, anda termasuk gemuk";
}