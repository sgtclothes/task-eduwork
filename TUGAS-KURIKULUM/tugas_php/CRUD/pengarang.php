<?php 
    include_once("connectDB.php");
    $pengarang = mysqli_query($conn, "SELECT * FROM `pengarang`;");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pengarang</title>
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
    <a class='btn btn-success' href="addPengarang.php">Add New Pengarang</a><br><br>

    <table class="table table-striped">
        <tr>
            <th>Id Pengarang</th>
            <th>Nama Pengarang</th>
            <th>Email</th>
            <th>Telpon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php 
            while ($data = mysqli_fetch_array($pengarang)) {
                echo "<tr>";
                echo "<td>".$data['id_pengarang']."</td>";
                echo "<td>".$data['nama_pengarang']."</td>";
                echo "<td>".$data['email']."</td>";
                echo "<td>".$data['telp']."</td>";
                echo "<td>".$data['alamat']."</td>";
                echo "<td><a class='btn btn-primary' href='editPengarang.php?id_pengarang=" . $data['id_pengarang'] . "'>Edit</a> | <a class='btn btn-danger' href='deletePengarang.php?id_pengarang=" . $data['id_pengarang'] . "'>Delete</a></td></tr>";
            }
        
        ?>
    </table>
</body>
</html>