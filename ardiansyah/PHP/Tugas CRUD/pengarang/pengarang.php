<?php
include_once("connect.php");
$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang
                                        ORDER BY id_pengarang ASC");
?>

<html>

<head>
    <title>Pengarang</title>
    
</head>

<body>

    <center>
        <h1>Tugas CRUD - Mohamad Ardiansyah Rofii</h1>
        <a href="/Tugas CRUD/index.php">Buku</a> |
        <a href="/Tugas CRUD/penerbit/penerbit.php">Penerbit</a> |
        <a href="/Tugas CRUD/pengarang/pengarang.php">Pengarang</a> |
        <a href="/Tugas CRUD/katalog/katalog.php">Katalog</a>
        <hr>
    </center>

    <a href="add.php">Add New Pengarang</a><br /><br />

    <table class="table" width='80%' border=1>

        <tr>
            <th>ID Pengarang</th>
            <th>Nama Pengarang</th>
            <th>Email</th>
            <th>Telp</th>
            <th>Alamat</th>
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