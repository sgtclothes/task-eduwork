<?php 

    $array = file_get_contents('data.json');
    $data = json_decode($array, true);

    foreach($data as $key => $value){
        echo "Nama : ".$value['nama'].", Kelas : ".$value['kelas'].", Alamat : ".$value['alamat'].", Tanggal Lahir : ".$value['tanggal_lahir'].", Nilai : ".$value['nilai'];
        echo "<br>";
    }


?>