<?php

include "conn.php";
$no = 1;

$isbn = $_GET['isbn'];
$buku = mysqli_query($conn, "SELECT * FROM buku WHERE isbn='$isbn'");
$penerbit = mysqli_query($conn, "SELECT * FROM penerbit");
$pengarang = mysqli_query($conn, "SELECT * FROM pengarang");
$katalog = mysqli_query($conn, "SELECT * FROM katalog");

while ($row = mysqli_fetch_assoc($buku)) {
    $isbn = $row['isbn'];
    $judul = $row['judul'];
    $tahun = $row['tahun'];
    $id_pengarang = $row['id_pengarang'];
    $id_penerbit = $row['id_penerbit'];
    $id_katalog = $row['id_katalog'];
    $qty = $row['qty_stok'];
    $harga_pinjam = $row['harga_pinjam'];
}


if (isset($_POST['update'])) {
    $isbn = $_GET['isbn'];
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $id_pengarang = $_POST['id_pengarang'];
    $id_penerbit = $_POST['id_penerbit'];
    $id_katalog = $_POST['id_katalog'];
    $qty = $_POST['qty_stok'];
    $harga_pinjam = $_POST['harga_pinjam'];

    $result = mysqli_query($conn, "UPDATE `buku` SET
    isbn = '$isbn', 
    judul = '$judul',
    tahun = '$tahun',
    id_pengarang = '$id_pengarang',
    id_penerbit = '$id_penerbit',
    id_katalog = '$id_katalog',
    qty_stok = '$qty',
    harga_pinjam = '$harga_pinjam'

    WHERE isbn = '$isbn'
    ");

    header("Location: index.php");
}

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
    <div class="container w-50">
        <h2 class="text-center">Masukkan data baru</h2>
        <form action="edit.php?isbn=<?= $isbn;  ?>" method="post">
            <div class="form-group my-3">
                <label for="isbn">isbn</label>
                <input type="text" class="form-control " name="isbn" value="<?= $isbn ?>">
            </div>

            <div class="form-group my-3">
                <label for="judul">judul</label>
                <input type="text" class="form-control " name="judul" value="<?= $judul ?>">
            </div>

            <div class=" form-group my-3">
                <label for="tahun">tahun</label>
                <input type="text" class="form-control " name="tahun" value="<?= $tahun ?>">
            </div>

            <div class="form-group my-3">
                <label for="id_penerbit">Penerbit</label>
                <select name="id_penerbit" class="form-control">
                    <?php
                    while ($row = mysqli_fetch_assoc($penerbit)) {
                        echo "<option " . ($row['id_penerbit'] == $id_penerbit ? 'selected' : '') . " value='" . $row['id_penerbit'] . "'> " . $row['nama_penerbit'] . " </option>";
                    }
                    ?>

                </select>
            </div>

            <div class="form-group my-3">
                <label for="id_pengarang">Pengarang</label>
                <select name="id_pengarang" class="form-control">
                    <?php
                    while ($row = mysqli_fetch_assoc($pengarang)) {
                        echo "<option " . ($row['id_pengarang'] == $id_pengarang ? 'selected' : '') . " value='" . $row['id_pengarang'] . "'>" . $row['nama_pengarang'] . "</option>";
                    }

                    ?>
                </select>
            </div>

            <div class="form-group my-3">
                <label for="id_katalog">Katalog</label>
                <select name="id_katalog" class="form-control">
                    <?php
                    while ($row = mysqli_fetch_assoc($katalog)) {
                        echo "<option " . ($row['id_katalog'] == $id_katalog ? 'selected' : '') . " value='" . $row['id_katalog'] . "'>" . $row['nama'] . "</option>";
                    }

                    ?>
                </select>
            </div>

            <div class="form-group my-3">
                <label for="stok">stok</label>
                <input type="text" class="form-control " name="qty_stok" value="<?= $qty ?>">
            </div>

            <div class="form-group my-3">
                <label for="harga_pinjam">Harga pinjam</label>
                <input type="text" class="form-control " name="harga_pinjam" value="<?= $harga_pinjam ?>">
            </div>

            <div class="d-grid mb-5">
                <input type="submit" class="btn btn-primary" value="update" name="update">
            </div>
        </form>

    </div>
</div>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>