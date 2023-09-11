<?php
    include_once("connect.php");
    $katalog = mysqli_query($mysqli, "SELECT katalog.id_katalog, katalog.nama AS nama_katalog, judul, tahun, nama_pengarang, nama_penerbit, qty_stok, harga_pinjam, isbn
                                        FROM `katalog`
                                        LEFT JOIN  buku ON buku.id_katalog = katalog.id_katalog
                                        LEFT JOIN  pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                        LEFT JOIN  penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                        ORDER BY judul ASC");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
 
<body>

<center>
    <a href="/Curd/index.php">Buku</a> |
    <a href="/Curd/penerbit/index.php">Penerbit</a> |
    <a href="/Curd/pengarang/index.php">Pengarang</a> |
    <a href="./index.php">Katalog</a>
    <hr>
</center>

<a href="add.php">Add New Katalog</a><br/><br/>
 
    <table class="table" width='80%' border=1>
 
    <tr>
        <th>Id Katalog</th> 
        <th>Nama Katalog</th> 
        <th>Aksi</th>
    </tr>
    <?php  
        while($katalog_data = mysqli_fetch_array($katalog)) {         
            echo "<tr>";
            echo "<td>".$katalog_data['id_katalog']."</td>";
            echo "<td>".$katalog_data['nama_katalog']."</td>";
            echo "<td><a class='btn btn-primary' href='edit.php?id_katalog=$katalog_data[id_katalog]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_katalog=$katalog_data[id_katalog]'>Delete</a></td></tr>";
        }
    ?>
    </table>
</body>
</html>