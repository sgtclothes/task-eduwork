<?php
    include_once("connect.php");
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog");
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
            <a href="katalog_add.php" class='btn btn-primary'>Add New Katalog</a><br/><br/>
             
            <table class="table" border=1>
            <thead class="thead-dark">
                    <tr>
                        <th scope="col">Id Katalog</th> 
                        <th scope="col">Nama</th> 
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
            <?php  
                while($katalog_data = mysqli_fetch_array($katalog)) {         
                    echo "<tr>";
                    echo "<td>".$katalog_data['id_katalog']."</td>";
                    echo "<td>".$katalog_data['nama']."</td>";  
                    echo "<td><a class='btn btn-success' href='katalog_edit.php?katalog=$katalog_data[id_katalog]'>Edit</a> | <a class='btn btn-danger' href='katalog_delete.php?katalog=$katalog_data[id_katalog]'>Delete</a></td></tr>";        
                }
            ?>
            </table>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>