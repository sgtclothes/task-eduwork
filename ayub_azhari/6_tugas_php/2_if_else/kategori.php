<?php

$name = "Ayub Azhari";
$tinggi_m = 1.72;
$berat_kg = 63;
$bmi = $berat_kg / ($tinggi_m * $tinggi_m);

if($bmi <= 18.5) {
    echo "Halo, $name. Nilai BMI anda adalah $bmi, anda termasuk kurus.";
}else if($bmi <= 24.9) {
    echo "Halo, $name. Nilai BMI anda adalah $bmi, anda termasuk normal.";
}else if($bmi <= 29.9) {
    echo "Halo, $name. Nilai BMI anda adalah $bmi, anda termasuk gemuk.";
}