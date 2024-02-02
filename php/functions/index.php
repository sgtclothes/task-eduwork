<?php 

    function tampilkanNama($nama = 'sawindri', $umur = '20'){
        echo "Nama saya $nama <br>";
        echo "Umur saya $umur <br><br>";
    }
    tampilkanNama();

    function Penjumlahan($angka1, $angka2){
        $hasil = $angka1 + $angka2;
        echo "$angka1 + $angka2 = $hasil ";
    }
    Penjumlahan(100, 2)
;
?>