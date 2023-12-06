<?php

    $nama = "Andi";
    $tinggi_badan = 167;
    $berat_badan = 71;
    
    //menghitung BMI
    $tinggi_badan_m = $tinggi_badan / 100; //mengubah tinggi badan dari cm ke m
    $bmi = $berat_badan / pow($tinggi_badan_m, 2);

        //menentukan kategori BMI
        if ($bmi < 18.5) {
            $kategori = "Kurus";
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $kategori = "Sedang";
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            $kategori = "Gemuk";
        } else {
            $kategori = "Obesitas";
        }

    echo "Halo $nama, ";
    echo "nilai BMI Anda adalah $bmi. ";
    echo "Anda termasuk dalam kategori $kategori";
?>