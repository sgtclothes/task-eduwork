<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rizal - Array</title>
    <style>
        table, th, td {
          border:2px solid black;
          border-collapse: collapse;
        }
        tr:nth-child(even) {
			background-color: #dddddd;
		}
        nav {
            background-color: gold;
            padding: 1px;
        }
        h3 {
            margin-left: 25px;
        }
        table {
            margin-top: 50px;
        }
        th, td {
            padding: 10px;
        }
    </style>
</head>
<body>
<?php
   $array = file_get_contents('data.json');
   $data = json_decode($array, true);
   $no = 1;
?>

<nav>
<h3>Daftar Nilai</h3>
</nav>
<center>
     <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Kelas</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
        <?php foreach ($data as $key => $value) : ?>
        <tr>
            <td> 
                <?= $no++ ?>
            </td>
            <td> 
                <?= $value['nama']  ?>
            </td>
            <td> 
                <?= $value['tanggal_lahir'] ?>
            </td>
            <td> 
                <?= $value['umur'] ?>
            </td>
            <td> 
                <?= $value['alamat'] ?>
            </td>
            <td> 
                <?= $value['kelas'] ?>
            </td>
            <td> 
                <?= $value['nilai'] ?>
            </td>
            <td> 
                <?= $value['hasil'] ?>
            </td>
        </tr>
        <?php endforeach ?>
     </table>
</center>

</body>
</html>




