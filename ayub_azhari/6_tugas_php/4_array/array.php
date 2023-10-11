<?php

$array = file_get_contents('data.json');
$data = json_decode($array, true);
$no = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        body {
            margin: 0;
        }
        h2 {
            background-color: gold;
            padding: 15px 30px;
            margin-top: 0px;
            margin-bottom: 50px;
        }
        table {
            margin: 0 auto;
        }
        .warna {
            background: #2312;
        }
    </style>
</head>
<body>
    <h2>Daftar Nilai</h2>
    <table border="1" cellspacing="0" cellpadding="10">
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
        <?php foreach ($data as $value) : ?>
        <?php if($no % 2 == 1) : ?>
        <tr class="warna">
        <?php else : ?>
        <tr>
        <?php endif ?>
            <td><?= $no++; ?></td>
            <td><?= $value["nama"] ?></td>
            <td><?= $value["tanggal_lahir"] ?></td>
            <td><?= date('Y') - $value["tahun_lahir"] ?></td>
            <td><?= $value["alamat"] ?></td>
            <td><?= $value["kelas"] ?></td>
            <td><?= $value["nilai"] ?></td>
            <?php if($value["nilai"] >= 90) : ?>
            <td><?= "A" ?></td>
            <?php elseif($value["nilai"] >= 80) : ?>
            <td><?= "B" ?></td>
            <?php elseif($value["nilai"] >= 70) : ?>
            <td><?= "C" ?></td>
            <?php elseif($value["nilai"] >= 60) : ?>
            <td><?= "D" ?></td>
            <?php else : ?>
            <td><?= "E" ?></td>
            <?php endif ?>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>