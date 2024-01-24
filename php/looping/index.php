<?php 

    // looping for
    for($i = 10; $i >= 1; $i--){
        echo "Looping ke $i <br>";
    }

    echo "<br><br><br>";
    
    // looping while
    $ulang = 10;
    while($ulang <= 15){
        echo "<p> Ini adalah perulangan ke- $ulang</p>";
        $ulang++;
    }
    
    echo "<br><br><br>";
    
    // looping Do While
    $ul = 10;
    do{
        echo "<p>perulangan ke $ul</p>";
        $ul--;
    }while($ul >= 1);


    
    echo "<br><br><br>";

    // Looping foreach
    $buku = [
        "Panduan belajar PHP unutk pemula",
        "Membangun aplikasu web dengan PHP",
        "Tutorial PHP dan MySql",
        "Membuat chat bot dengan PHP"
    ];

    echo "<h5>Judul Buku PHP:</h5>";
    echo "<ul>";
    foreach($buku as $b){
        echo "<li>$b</li>";
    }
    echo "</ul>";
?>