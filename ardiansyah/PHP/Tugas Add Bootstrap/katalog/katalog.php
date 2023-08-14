<?php
include_once("connect.php");
$katalog = mysqli_query($mysqli, "SELECT * FROM katalog 
                                        ORDER BY id_katalog ASC");
?>

<html>

<head>
    <title>Katalog</title>
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

    <a class="btn btn-success" href="add.php">Add New Katalog</a><br /><br />

    <table class="table table-dark table-striped" width='80%' border=1>

        <tr>
            <th>ID Katalog</th>
            <th>Nama Katalog</th>
            <th>Aksi</th>
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