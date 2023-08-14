<?php
include_once("connect.php");
$katalog = mysqli_query($mysqli, "SELECT * FROM katalog 
                                        ORDER BY id_katalog ASC");
?>

<html>

<head>
    <title>Katalog</title>

</head>

<body>

    <center>
        <h1>Tugas CRUD - Mohamad Ardiansyah Rofii</h1>
        <a href="/Tugas CRUD/index.php">Buku</a> |
        <a href="/Tugas CRUD/katalog/katalog.php">katalog</a> |
        <a href="/Tugas CRUD/pengarang/pengarang.php">Pengarang</a> |
        <a href="/Tugas CRUD/katalog/katalog.php">Katalog</a>
        <hr>
    </center>

    <a href="add.php">Add New Katalog</a><br /><br />

    <table class="table" width='80%' border=1>

        <tr>
            <th>ID Katalog</th>
            <th>Nama Katalog</th>
        </tr>
        <?php
        while ($katalog_data = mysqli_fetch_array($katalog)) {
            echo "<tr>";
            echo "<td>" . $katalog_data['id_katalog'] . "</td>";
            echo "<td>" . $katalog_data['nama'] . "</td>";
            
            echo "<td><a class='btn btn-primary' href='edit.php?id_katalog=$katalog_data[id_katalog]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_katalog=$katalog_data[id_katalog]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>