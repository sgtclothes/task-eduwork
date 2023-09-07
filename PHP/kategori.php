<?php 

    $nama = "Dimas";
    $b = 88;
    $t = 1.7;

    $bmi = $b / ($t * $t);
    // echo "$bmi";

    if($bmi <= 18.5){
        echo "Halo, $nama. Nilai BMI kamu adalah $bmi, anda termasuk kurus ";
    } elseif ($bmi <= 24.9){
        echo "Halo, $nama. Nilai BMI kamu adalah $bmi, anda termasuk normal ";
    }elseif ($bmi >= 30){
        echo "Halo, $nama. Nilai BMI kamu adalah $bmi, anda termasuk Gemuk ";
    }

?>