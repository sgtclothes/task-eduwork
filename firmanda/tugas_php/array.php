<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="background-color:chocolate;">Daftar Nilai</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Nilai</th>
        </tr>
        <?php
        $data = file_get_contents("data.json");
        $listSiswa = json_decode($data,true);
        
        $a=0;
        foreach($listSiswa as $key => $value){
            $a++;
            echo "<tr>";
            echo "<td> $a.</td>";
            echo "<td>".$value["nama"]."</td>";
            echo "<td>".$value["kelas"]."</td>";
            echo "<td>".$value["alamat"]."</td>";
            echo "<td>".$value["tanggal_lahir"]."</td>";
            echo "<td>".$value["nilai"]."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>