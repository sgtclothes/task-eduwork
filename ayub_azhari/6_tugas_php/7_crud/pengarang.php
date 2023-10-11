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
        <a href="add_pengarang.php">Add New Pengarang</a><br/><br/>
        <table border="1" cellpadding="10" cellspacing="0">
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
                    echo "<td><a href='edit_pengarang.php?id_pengarang=$pengarang_data[id_pengarang]'>Edit</a> | <a href='delete_pengarang.php?id_pengarang=$pengarang_data[id_pengarang]'>Delete</a></td></tr>";        
                }
            ?>
        </table>
    </div>
</body>
</html>