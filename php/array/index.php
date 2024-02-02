<?php 

    // membuat array yang berisi nama buah-buahan
    $fruit = array('watermelon', 'orange', 'apple', 'grape');

    // menampilkan data array dengan nomor urut 2
    echo $fruit[1];

    echo "<br><br><br>";

    // penampilan isi array
    $fruit['watermelon'] = "the contents are red";
    $fruit['orange'] = "It tastes sweet";
    $fruit['apple'] = "the color is red";
    $fruit['grape'] = "The price is expensive";

    // menampilkan isi array yang bernama orange
    echo $fruit['orange'];

    echo "<br><br><br>";

    // count() untuk menghitung isi array
    for($i = 0; $i < count($fruit); $i++){
        echo "Looping ke $i adalah " . $fruit[$i] . "<br/>";
    }
    

    $data = array(
        array(
            "nama" => "Pelita",
            "kelas" => "Laravel",
            "alamat" => "Bandung",
            "tanggal_lahir" => "1997-12-27",
            "nilai" => 90
        ),
        array(
            "nama" => "Najmina",
            "kelas" => "Vue JS",
            "alamat" => "Jakarta",
            "tanggal_lahir" => "1998-10-07",
            "nilai" => 55
        ),
        array(
            "nama" => "Anita",
            "kelas" => "Design",
            "alamat" => "Semarang",
            "tanggal_lahir" => "1999-08-20",
            "nilai" => 80
        ),
        array(
            "nama" => "Bayu",
            "kelas" => "Digital Marketing",
            "alamat" => "Bandung",
            "tanggal_lahir" => "1990-01-01",
            "nilai" => 65
        ),
        array(
            "nama" => "Nasa",
            "kelas" => "UI/UX Designer",
            "alamat" => "Bandung",
            "tanggal_lahir" => "1995-04-10",
            "nilai" => 70
        ),
        array(
            "nama" => "Rahma",
            "kelas" => "Node JS",
            "alamat" => "Yogyakarta",
            "tanggal_lahir" => "1993-09-15",
            "nilai" => 85
        )
    );

?>