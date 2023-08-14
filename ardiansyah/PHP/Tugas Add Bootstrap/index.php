<?php
include_once("connect.php");
$buku = mysqli_query($mysqli, "SELECT buku.*, nama_pengarang, nama_penerbit, katalog.nama as nama_katalog FROM buku 
                                        LEFT JOIN  pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                        LEFT JOIN  penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                        LEFT JOIN  katalog ON katalog.id_katalog = buku.id_katalog
                                        ORDER BY judul ASC");
?>

<html>

<head>
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>

    <center>
        <h1>Tugas CRUD - Mohamad Ardiansyah Rofii</h1>
        <a href="/Tugas Add Bootstrap/index.php">Buku</a> |
        <a href="/Tugas Add Bootstrap/penerbit/penerbit.php">Penerbit</a> |
        <a href="/Tugas Add Bootstrap/pengarang/pengarang.php">Pengarang</a> |
        <a href="/Tugas Add Bootstrap/katalog/katalog.php">Katalog</a>
        <hr>
    </center>

    <a class="btn btn-success" href="add.php">Add New Buku</a><br /><br />

    <table class="table table-dark table-striped" width='80%' border=1>

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
        while ($buku_data = mysqli_fetch_array($buku)) {
            echo "<tr>";
            echo "<td>" . $buku_data['isbn'] . "</td>";
            echo "<td>" . $buku_data['judul'] . "</td>";
            echo "<td>" . $buku_data['tahun'] . "</td>";
            echo "<td>" . $buku_data['nama_pengarang'] . "</td>";
            echo "<td>" . $buku_data['nama_penerbit'] . "</td>";
            echo "<td>" . $buku_data['nama_katalog'] . "</td>";
            echo "<td>" . $buku_data['qty_stok'] . "</td>";
            echo "<td>" . $buku_data['harga_pinjam'] . "</td>";
            echo "<td><a class='btn btn-primary' href='edit.php?isbn=$buku_data[isbn]'>Edit</a> | <a class='btn btn-danger' href='delete.php?isbn=$buku_data[isbn]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>