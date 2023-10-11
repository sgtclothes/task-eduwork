<?php
    include_once("connect.php");
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog</title>
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
        <a href="add_katalog.php">Add New Katalog</a><br/><br/>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Id Katalog</th> 
                <th>Nama Katalog</th> 
                <th>Aksi</th>
            </tr>
            <?php  
                while($katalog_data = mysqli_fetch_array($katalog)) {         
                    echo "<tr>";
                    echo "<td>".$katalog_data['id_katalog']."</td>";
                    echo "<td>".$katalog_data['nama']."</td>";    
                    echo "<td><a href='edit_katalog.php?id_katalog=$katalog_data[id_katalog]'>Edit</a> | <a href='delete_katalog.php?id_katalog=$katalog_data[id_katalog]'>Delete</a></td></tr>";        
                }
            ?>
        </table>
    </div>
</body>
</html>