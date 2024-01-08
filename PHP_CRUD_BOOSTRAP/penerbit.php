<?php
    include_once("connect.php");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
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
            <a href="penerbit_add.php" class='btn btn-primary'>Add New Penerbit</a><br/><br/>
         
            <table class="table" border=1>
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id Penerbit</th> 
                        <th scope="col">Nama Penerbit</th> 
                        <th scope="col">Email</th> 
                        <th scope="col">Telp</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
            <?php  
                while($penerbit_data = mysqli_fetch_array($penerbit)) {         
                    echo "<tr>";
                    echo "<td>".$penerbit_data['id_penerbit']."</td>";
                    echo "<td>".$penerbit_data['nama_penerbit']."</td>";
                    echo "<td>".$penerbit_data['email']."</td>";    
                    echo "<td>".$penerbit_data['telp']."</td>";    
                    echo "<td>".$penerbit_data['alamat']."</td>";    
                    echo "<td><a class='btn btn-success' href='penerbit_edit.php?penerbit=$penerbit_data[id_penerbit]'>Edit</a> | <a class='btn btn-danger' href='penerbit_delete.php?penerbit=$penerbit_data[id_penerbit]'>Delete</a></td></tr>";        
                }
            ?>
            </table>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
</body>
</html>