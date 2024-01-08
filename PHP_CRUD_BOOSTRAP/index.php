<?php
    include_once("connect.php");
    $buku = mysqli_query($mysqli, "SELECT buku.*, nama_pengarang, nama_penerbit, katalog.nama as nama_katalog FROM buku 
                                        LEFT JOIN  pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                        LEFT JOIN  penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                        LEFT JOIN  katalog ON katalog.id_katalog = buku.id_katalog
                                        ORDER BY judul ASC");
?>
 
<html>
<head>    
    <title>Admin Perpus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
</head>
 
<body>

<img src="perpus.jpg" alt="" class="img-header">

<center class="menu-header shadow-sm">
    <a href="index.php">Buku</a> |
    <a href="penerbit.php">Penerbit</a> |
    <a href="pengarang.php">Pengarang</a> |
    <a href="katalog.php">Katalog</a>
    <hr>
</center>


    <br/>

    <div class="content">
        <div>
            <a href="add.php" class='btn btn-primary'>Add New Buku</a><br/><br/>
            
                <table class="table" border=1>
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ISBN</th> 
                        <th scope="col">Judul</th> 
                        <th scope="col">Tahun</th> 
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Katalog</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Harga Pinjam</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
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
                        echo "<td><a class='btn btn-success' href='edit.php?isbn=$buku_data[isbn]'>Edit</a> | <a class='btn btn-danger' href='delete.php?isbn=$buku_data[isbn]'>Delete</a></td></tr>";        
                    }
                ?>
                </table>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>