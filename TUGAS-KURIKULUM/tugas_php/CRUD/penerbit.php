<?php 
    include_once("connectDB.php");
    $penerbit = mysqli_query($conn, "SELECT * FROM `penerbit`;");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Penerbit</title>
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
    <a class='btn btn-success' href="addPenerbit.php">Add New Penerbit</a><br><br>

    <table class="table table-striped">
        <tr>
            <th>Id Penerbit</th>
            <th>Nama Penerbit</th>
            <th>Email</th>
            <th>Telpon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php 
            while ($data = mysqli_fetch_array($penerbit)) {
                echo "<tr>";
                echo "<td>".$data['id_penerbit']."</td>";
                echo "<td>".$data['nama_penerbit']."</td>";
                echo "<td>".$data['email']."</td>";
                echo "<td>".$data['telp']."</td>";
                echo "<td>".$data['alamat']."</td>";
                echo "<td><a class='btn btn-primary' href='editPenerbit.php?id_penerbit=" . $data['id_penerbit'] . "'>Edit</a> | <a class='btn btn-danger' href='deletePenerbit.php?id_penerbit=" . $data['id_penerbit'] . "'>Delete</a></td></tr>";
            }
        
        ?>
    </table>
</body>
</html>