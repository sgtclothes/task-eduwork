<?php 
    include_once("connectDB.php");
    $buku = mysqli_query($conn, "SELECT buku.*, pengarang.nama_pengarang, penerbit.nama_penerbit, katalog.nama AS nama_katalog \n"

    . "FROM buku \n"

    . "LEFT JOIN pengarang ON buku.id_pengarang = pengarang.id_pengarang \n"

    . "LEFT JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit \n"

    . "LEFT JOIN katalog ON buku.id_katalog = katalog.id_katalog\n"

    . "ORDER BY judul");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand"  href="index.php">Buku</a>
        <a class="navbar-brand" href="penerbit.php">Penerbit</a>
        <a class="navbar-brand" href="pengarang.php">Pengarang</a>
        <a class="navbar-brand" href="katalog.php">Katalog</a>
    </div>
    </nav>  
    <a class='btn btn-success' href="add.php">Add New Buku</a><br><br>

    <table  class="table table-striped">
        <tr>
            <th>ISBN</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Katalog</th>
            <th>Stok</th>
            <th>Harga Pinjam</th>
            <th>Aksi</th>
        </tr>
        <?php 
            while ($data = mysqli_fetch_array($buku)) {
                echo "<tr>";
                echo "<td>".$data['isbn']."</td>";
                echo "<td>".$data['judul']."</td>";
                echo "<td>".$data['tahun']."</td>";
                echo "<td>".$data['nama_pengarang']."</td>";
                echo "<td>".$data['nama_penerbit']."</td>";
                echo "<td>".$data['nama_katalog']."</td>";
                echo "<td>".$data['qty_stok']."</td>";
                echo "<td>".$data['harga_pinjam']."</td>";
                echo "<td><a class='btn btn-primary' href='edit.php?isbn=" . $data['isbn'] . "'>Edit</a> | <a class='btn btn-danger' href='delete.php?isbn=" . $data['isbn'] . "'>Delete</a></td></tr>";
            }
        
        ?>
    </table>
</body>
</html>