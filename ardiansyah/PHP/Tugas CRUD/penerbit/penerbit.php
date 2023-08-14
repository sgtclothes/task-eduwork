<?php
include_once("connect.php");
$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit 
                                        ORDER BY id_penerbit ASC");
?>

<html>

<head>
    <title>Penerbit</title>
    
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

    <a href="add.php">Add New Penerbit</a><br /><br />

    <table class="table" width='80%' border=1>

        <tr>
            <th>ID Penerbit</th>
            <th>Nama Penerbit</th>
            <th>Email</th>
            <th>Telp</th>
            <th>Alamat</th>
        </tr>
        <?php
        while ($penerbit_data = mysqli_fetch_array($penerbit)) {
            echo "<tr>";
            echo "<td>" . $penerbit_data['id_penerbit'] . "</td>";
            echo "<td>" . $penerbit_data['nama_penerbit'] . "</td>";
            echo "<td>" . $penerbit_data['email'] . "</td>";
            echo "<td>" . $penerbit_data['telp'] . "</td>";
            echo "<td>" . $penerbit_data['alamat'] . "</td>";
            echo "<td><a class='btn btn-primary' href='edit.php?id_penerbit=$penerbit_data[id_penerbit]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_penerbit=$penerbit_data[id_penerbit]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>