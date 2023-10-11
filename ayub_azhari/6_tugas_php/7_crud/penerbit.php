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
        <a href="add_penerbit.php">Add New Penerbit</a><br/><br/>
        <table border="1" cellpadding="10" cellspacing="0">
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
                    echo "<td><a href='edit_penerbit.php?id_penerbit=$penerbit_data[id_penerbit]'>Edit</a> | <a href='delete_penerbit.php?id_penerbit=$penerbit_data[id_penerbit]'>Delete</a></td></tr>";        
                }
            ?>
        </table>
    </div>
</body>
</html>