<?php
$no = 1;
$data = [
    ["nama" => "Nama ke 1", "kelas" => "Kelas 10"],
    ["nama" => "Nama ke 2", "kelas" => "Kelas 9"],
    ["nama" => "Nama ke 3", "kelas" => "Kelas 8"],
    ["nama" => "Nama ke 4", "kelas" => "Kelas 7"],
    ["nama" => "Nama ke 5", "kelas" => "Kelas 6"],
    ["nama" => "Nama ke 6", "kelas" => "Kelas 5"],
    ["nama" => "Nama ke 7", "kelas" => "Kelas 4"],
    ["nama" => "Nama ke 8", "kelas" => "Kelas 3"],
    ["nama" => "Nama ke 9", "kelas" => "Kelas 2"],
    ["nama" => "Nama ke 10", "kelas" => "Kelas 1"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping 2</title>
    <style>
        th {
            background-color: skyblue;
        }
        .warna {
            background: #2312;
        }
    </style>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php foreach ($data as $value) : ?>
        <?php if($no % 2 == 1) : ?>
        <tr class="warna">
        <?php else : ?>
        <tr>
        <?php endif ?>
            <td><?= $no++; ?></td>
            <td><?= $value["nama"] ?></td>
            <td><?= $value["kelas"] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>