<?php 
include_once("connect.php");
 $buku = mysqli_query($conn, "SELECT buku.*, nama_pengarang, nama_penerbit, katalog.nama as nama_katalog FROM buku 
                                        LEFT JOIN  pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                        LEFT JOIN  penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                        LEFT JOIN  katalog ON katalog.id_katalog = buku.id_katalog
                                        ORDER BY judul ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <title>HomePage</title>
</head>
<body class="card text-center">
    <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active">Buku</a>
                </li>
                <li class="nav-item">
                    <a href="penerbit.php" class="nav-link">Penerbit</a>
                </li>
                <li class="nav-item">
                    <a href="pengarang.php" class="nav-link">Pengarang</a>
                </li>
                <li class="nav-item">
                    <a href="katalog.php" class="nav-link">Katalog</a>
                </li>

            </ul>
       
    </div>

    <div class="card-body">
        <h5 class="card-title"> table content buku</h5>
        <a href="add.php" class="btn btn-outline-primary">tambah buku baru</a>
        <table border="1" class="table table-striped table-hover">
            <tr>
                <th>ISBN</th>
                <th>Judul</th>
                <th>Tahun</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Katalog</th>
                <th>Stock</th>
                <th>Harga Pinjam</th>
                <th>Aksi</th>
            </tr>
            <?php
            while ($buku_data = mysqli_fetch_array($buku)){
                echo "<tr>";
                echo "<td>".$buku_data['isbn']."</td>";
                echo "<td>".$buku_data['judul']."</td>";
                echo "<td>".$buku_data['tahun']."</td>";
                echo "<td>".$buku_data['nama_pengarang']."</td>";
                echo "<td>".$buku_data['nama_penerbit']."</td>";
                echo "<td>".$buku_data['nama_katalog']."</td>";
                echo "<td>".$buku_data['qty_stok']."</td>";
                echo "<td>".$buku_data['harga_pinjam']."</td>";
                echo "<td><a class='btn btn-primary' href='edit.php?isbn=$buku_data[isbn]'> Edit </a> | <a class='btn btn-danger' href='delete.php?isbn=$buku_data[isbn]'> Delete </a> </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>