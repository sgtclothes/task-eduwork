<?php
    include_once("connect.php");
    $buku = mysqli_query($mysqli, "SELECT buku.*, nama_pengarang, nama_penerbit, katalog.nama as nama_katalog FROM buku 
                                        LEFT JOIN  pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                        LEFT JOIN  penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                        LEFT JOIN  katalog ON katalog.id_katalog = buku.id_katalog
                                        ORDER BY judul ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
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
        <h4 class="text-center mt-3">Halaman Daftar Buku</h4>
        <a class="btn btn-success my-3" href="add_buku.php">Insert</a>
        <table class="table table-striped text-center">
            <tr>
                <th>ISBN</th> 
                <th>Judul</th> 
                <th>Tahun</th> 
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Katalog</th>
                <th>Stok</th>
                <th>Harga Pinjam</th>
                <th>Aksi</th>
            </tr>
            <?php  
                while($buku_data = mysqli_fetch_array($buku)) {         
                    echo "<tr>";
                    echo "<td>".$buku_data['isbn']."</td>";
                    echo "<td>".$buku_data['judul']."</td>";
                    echo "<td>".$buku_data['tahun']."</td>";    
                    echo "<td>".$buku_data['nama_pengarang']."</td>";    
                    echo "<td>".$buku_data['nama_penerbit']."</td>";    
                    echo "<td>".$buku_data['nama_katalog']."</td>";    
                    echo "<td>".$buku_data['qty_stok']."</td>";    
                    echo "<td>".$buku_data['harga_pinjam']."</td>";    
                    echo "<td><a class='btn btn-warning text-white' href='edit_buku.php?isbn=$buku_data[isbn]'>Edit</a> | <a class='btn btn-danger' href='delete_buku.php?isbn=$buku_data[isbn]'>Delete</a></td></tr>";        
                }
            ?>
        </table>
    </div>
</body>
</html>
