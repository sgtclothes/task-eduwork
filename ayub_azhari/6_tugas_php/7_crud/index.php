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
    <title>Home</title>
    <style>
        div {
            margin: 10px 30px;
            padding: 10px 30px
        }
        tr {
            text-align: center;
        }
    </style>
</head>
<body>
    <div>
        <a href="index.php">Buku</a> |
        <a href="pengarang.php">Pengarang</a> |
        <a href="penerbit.php">Penerbit</a> |
        <a href="katalog.php">Katalog</a>
        <br><hr>
        <a href="add_buku.php">Add New Buku</a><br/><br/>
        <table border="1" cellpadding="10" cellspacing="0">
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
                    echo "<td><a href='edit_buku.php?isbn=$buku_data[isbn]'>Edit</a> | <a href='delete_buku.php?isbn=$buku_data[isbn]'>Delete</a></td></tr>";        
                }
            ?>
        </table>
    </div>
</body>
</html>
