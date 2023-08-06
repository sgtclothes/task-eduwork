<?php

include "conn.php";
$no = 1;

$sql = "SELECT buku.*, nama_pengarang, nama_penerbit, katalog.nama as nama_katalog FROM buku
    LEFT JOIN pengarang on pengarang.id_pengarang = buku.id_pengarang
    LEFT JOIN penerbit on penerbit.id_penerbit = buku.id_penerbit
    LEFT JOIN katalog on katalog.id_katalog = buku.id_katalog
    ORDER BY tahun DESC
    ";
$result = $conn->query($sql);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<div class=" mt-5 table-responsive-lg">
    <div class="container w-75">
        <a href="add.php" class="btn btn-primary my-4">Tambahkan data buku</a>
        <table class="table table-striped text-center ">
            <thead class="table-success">
                <th scope="col">No</th>
                <th scope="col">ISBN</th>
                <th scope="col">Judul</th>
                <th scope="col">Tahun</th>
                <th scope="col">Pengarang</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Katalog</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga pinjam</th>
                <th scope="col">Aksi</th>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {

                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['isbn']; ?></td>
                        <td><?= $row['judul']; ?></td>
                        <td><?= $row['tahun']; ?></td>
                        <td><?= $row['nama_pengarang']; ?></td>
                        <td><?= $row['nama_penerbit']; ?></td>
                        <td><?= $row['nama_katalog']; ?></td>
                        <td><?= $row['qty_stok']; ?></td>
                        <td><?= $row['harga_pinjam']; ?></td>
                        <td>
                            <a href='edit.php?isbn=<?= $row["isbn"] ?>' class="btn btn-info">Edit</a>
                            <a href="delete.php?isbn=<?= $row['isbn']; ?>">
                                <button class="btn btn-danger" name="delete" onclick="return  confirm('do you want to delete')">delete</button>
                            </a>
                        </td>
                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>
    </div>

</div>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>