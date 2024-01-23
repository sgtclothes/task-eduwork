<?php 

    $nama = "sawindri";
    $jk = "perempuan";
    $thLahir = 1999;
    $umur = date('Y') - $thLahir;

    if($jk == "perempuan"){
        echo "Selamat pagi, nyonya $nama <br>";
        echo "Umur anda sekarang $umur tahun";
    }else{
        echo "Selamat pagi, tuan $nama <br>";
        echo "Umur anda sekarang $umur tahun";
    }


?>