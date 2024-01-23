<?php 

    // Menghitung nilai BMI
    $nama = "sawindri";
    $tinggi = 1.62; // meter
    $berat = 65; // kg
    $bmi = $berat / ($tinggi * $tinggi);

    if($bmi <= 18.5){
        echo "Hallo, $nama. Nilai BMI anda adalah $bmi, anda termasuk kurus";
    } else if($bmi <= 25){
        echo "Hallo, $nama. Nilai BMI anda adalah $bmi, anda termasuk sedang";
    } else{
        echo "Hallo, $nama. Nilai BMI anda adalah $bmi, anda termasuk gemuk";
    }


?>