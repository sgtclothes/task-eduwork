<?php
    $nama = "Arif";
    $tinggiBadan = 1.70;
    $beratBadan = 75;
    $result = ceil($beratBadan/($tinggiBadan*$tinggiBadan));

    if($result == 17 || $result <= 18.4) {
        echo "Hallo, $nama. Nilai BMI anda adalah $result, anda termasuk kurus. ";
    }
    else if ($result == 18.5 || $result <= 25){
        echo "Hallo, $nama. Nilai BMI anda adalah $result, anda termasuk normal. ";
    }
    else if ($result == 25.1 || $result <= 27){
        echo "Hallo, $nama. Nilai BMI anda adalah $result, anda termasuk gemuk. ";
    }
?>