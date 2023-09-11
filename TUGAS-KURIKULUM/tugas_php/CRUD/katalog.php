<?php 
    include_once("connectDB.php");
    $katalog = mysqli_query($conn, "SELECT * FROM `katalog`;");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Katalog</title>
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
    <a class='btn btn-success' href="addKatalog.php">Add New Katalog</a><br><br>

    <table class="table table-striped">
        <tr>
            <th>Id Katalog</th>
            <th>Nama Katalog</th>
            <th>Aksi</th>
        </tr>
        <?php 
            while ($data = mysqli_fetch_array($katalog)) {
                echo "<tr>";
                echo "<td>".$data['id_katalog']."</td>";
                echo "<td>".$data['nama']."</td>";
                echo "<td><a class='btn btn-primary' href='editKatalog.php?id_katalog=" . $data['id_katalog'] . "'>Edit</a> | <a class='btn btn-danger' href='deleteKatalog.php?id_katalog=" . $data['id_katalog'] . "'>Delete</a></td></tr>";
            }
        
        ?>
    </table>
</body>
</html>