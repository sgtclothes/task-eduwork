<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "eduwork_2023_php_library";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
$data = query("SELECT * FROM buku WHERE qty_stok <= 10");

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect Database</title>
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
    <h2>Daftar Buku</h2>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>ISBN</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>ID Penerbit</th>
            <th>ID Pengarang</th>
            <th>ID Katalog</th>
            <th>Stok</th>
            <th>Harga Pinjam</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($data as $value) : ?>
        <?php if($no % 2 == 1) : ?>
        <tr class="warna">
        <?php else : ?>
        <tr>
        <?php endif ?>
            <td><?= $no++; ?></td>
            <td><?= $value["isbn"] ?></td>
            <td><?= $value["judul"] ?></td>
            <td><?= $value["tahun"] ?></td>
            <td><?= $value["id_penerbit"] ?></td>
            <td><?= $value["id_pengarang"] ?></td>
            <td><?= $value["id_katalog"] ?></td>
            <td><?= $value["qty_stok"] ?></td>
            <td><?= $value["harga_pinjam"] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
