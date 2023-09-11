<?php
    include_once("connect.php");
    $penerbit = mysqli_query($mysqli, "SELECT *, id_penerbit FROM penerbit ORDER BY id_penerbit ASC");
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
    <a href="./index.php">Penerbit</a> |
    <a href="/Curd/pengarang/index.php">Pengarang</a> |
    <a href="/Curd/katalog/index.php">Katalog</a>
    <hr>
</center>

<a href="add.php">Add New Penerbit</a><br/><br/>
 
    <table class="table" width='80%' border=1>
 
    <tr>
        <th>ID Penerbit</th> 
        <th>Nama</th> 
        <th>Email</th> 
        <th>Nomer Telepon</th> 
        <th>Alamat</th>
    </tr>
    <?php  
        while($penerbit_data = mysqli_fetch_array($penerbit)) {         
            echo "<tr>";
            echo "<td>".$penerbit_data['id_penerbit']."</td>";    
            echo "<td>".$penerbit_data['nama_penerbit']."</td>";    
            echo "<td>".$penerbit_data['email']."</td>";    
            echo "<td>".$penerbit_data['telp']."</td>";    
            echo "<td>".$penerbit_data['alamat']."</td>";    
            echo "<td><a class='btn btn-primary' href='edit.php?id_penerbit=$penerbit_data[id_penerbit]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_penerbit=$penerbit_data[id_penerbit]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</body>
</html>