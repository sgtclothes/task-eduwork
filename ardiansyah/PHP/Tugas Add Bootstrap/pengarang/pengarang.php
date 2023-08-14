<?php
include_once("connect.php");
$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang
                                        ORDER BY id_pengarang ASC");
?>

<html>

<head>
    <title>Pengarang</title>
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
    </center>

    <a class="btn btn-success" href="add.php">Add New Pengarang</a><br /><br />

    <table class="table table-dark table-striped" width='80%' border=1>

        <tr>
            <th>ID Pengarang</th>
            <th>Nama Pengarang</th>
            <th>Email</th>
            <th>Telp</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($pengarang_data = mysqli_fetch_array($pengarang)) {
            echo "<tr>";
            echo "<td>" . $pengarang_data['id_pengarang'] . "</td>";
            echo "<td>" . $pengarang_data['nama_pengarang'] . "</td>";
            echo "<td>" . $pengarang_data['email'] . "</td>";
            echo "<td>" . $pengarang_data['telp'] . "</td>";
            echo "<td>" . $pengarang_data['alamat'] . "</td>";
            echo "<td><a class='btn btn-primary' href='edit.php?id_pengarang=$pengarang_data[id_pengarang]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_pengarang=$pengarang_data[id_pengarang]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>