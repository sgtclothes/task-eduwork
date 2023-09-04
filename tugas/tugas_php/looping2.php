<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        table, th, td {
          border:2px solid black;
          border-collapse: collapse;
        }
        th {
         background-color: aqua;
        }
        tr:nth-child(even) {
			background-color: #dddddd;
		}
    </style>
</head>
<body>
<?php
$no = 1;
$nama = [
    "Nama ke 1" => "Kelas 10",
	"Nama ke 2" => "Kelas 9",
	"Nama ke 3" => "Kelas 8",
	"Nama ke 4" => "Kelas 7",
	"Nama ke 5" => "Kelas 6",
	"Nama ke 6" => "Kelas 5",
	"Nama ke 7" => "Kelas 4",
	"Nama ke 8" => "Kelas 3",
	"Nama ke 9" => "Kelas 2",
	"Nama ke 10" => "Kelas 1"
];
?>
     <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php foreach ($nama as $nama => $kelas) : ?>
        <tr>
            <td> 
                <?= $no++ ?>
            </td>
            <td> 
                <?= $nama ?>
            </td>
            <td> 
                <?= $kelas ?>
            </td>
        </tr>
        <?php endforeach ?>
     </table>

</body>
</html>




