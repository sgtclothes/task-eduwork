<?php 

    // Menu
    // 1. Penjumlahan
    // 2. Pengurangan
    // 3. Perkalian
    // 4. Pembagian

    $menu = 1;
    $bil1 = 10;
    $bil2 = 5;

    if($menu == 1){
        echo $bil1 + $bil2;
    }elseif($menu == 2){
        echo $bil1 - $bil2;
    }elseif($menu == 3){
        echo $bil1 * $bil2;
    }else{
        echo $bil1 / $bil2;
    }
?>