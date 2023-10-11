<?php
    include_once("connect.php");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerbit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="index.php">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="index.php">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pengarang.php">Pengarang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="penerbit.php">Penerbit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="katalog.php">Katalog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h4 class="text-center mt-3">Halaman Daftar Penerbit</h4>
        <a class="btn btn-success my-3" href="add_penerbit.php">Insert</a>
        <table class="table table-striped text-center">
            <tr>
                <th>Id Penerbit</th> 
                <th>Nama Penerbit</th> 
                <th>Email</th> 
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php  
                while($penerbit_data = mysqli_fetch_array($penerbit)) {         
                    echo "<tr>";
                    echo "<td>".$penerbit_data['id_penerbit']."</td>";
                    echo "<td>".$penerbit_data['nama_penerbit']."</td>";
                    echo "<td>".$penerbit_data['email']."</td>";    
                    echo "<td>".$penerbit_data['telp']."</td>";    
                    echo "<td>".$penerbit_data['alamat']."</td>";      
                    echo "<td><a class='btn btn-warning text-white' href='edit_penerbit.php?id_penerbit=$penerbit_data[id_penerbit]'>Edit</a> | <a class='btn btn-danger' href='delete_penerbit.php?id_penerbit=$penerbit_data[id_penerbit]'>Delete</a></td></tr>";        
                }
            ?>
        </table>
    </div>
</body>
</html>