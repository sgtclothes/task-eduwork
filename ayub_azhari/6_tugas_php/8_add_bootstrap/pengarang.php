<?php
    include_once("connect.php");
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengarang</title>
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
        <h4 class="text-center mt-3">Halaman Daftar Pengarang</h4>
        <a class="btn btn-success my-3" href="add_pengarang.php">Insert</a>
        <table class="table table-striped text-center">
            <tr>
                <th>Id Pengarang</th> 
                <th>Nama Pengarang</th> 
                <th>Email</th> 
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php  
                while($pengarang_data = mysqli_fetch_array($pengarang)) {         
                    echo "<tr>";
                    echo "<td>".$pengarang_data['id_pengarang']."</td>";
                    echo "<td>".$pengarang_data['nama_pengarang']."</td>";
                    echo "<td>".$pengarang_data['email']."</td>";    
                    echo "<td>".$pengarang_data['telp']."</td>";    
                    echo "<td>".$pengarang_data['alamat']."</td>";      
                    echo "<td><a class='btn btn-warning text-white' href='edit_pengarang.php?id_pengarang=$pengarang_data[id_pengarang]'>Edit</a> | <a class='btn btn-danger' href='delete_pengarang.php?id_pengarang=$pengarang_data[id_pengarang]'>Delete</a></td></tr>";        
                }
            ?>
        </table>
    </div>
</body>
</html>