<?php 
include_once("connect.php");
$katalog = mysqli_query($conn,"SELECT katalog.* FROM katalog ORDER BY id_katalog ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Katalog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body class="card text-center">
    <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Buku</a>
                </li>
                <li class="nav-item">
                    <a href="penerbit.php" class="nav-link">Penerbit</a>
                </li>
                <li class="nav-item">
                    <a href="pengarang.php" class="nav-link">Pengarang</a>
                </li>
                <li class="nav-item">
                    <a href="katalog.php" class="nav-link active">Katalog</a>
                </li>

            </ul>
       
    </div>
    <div class="card-body"> 
        <h5 class="card-title"> table content katalog</h5>
        <a href="addKatalog.php"  class="btn btn-outline-primary"> Tambah Katalog</a>
        <table border=1 class="table table-striped table-hover">
            <tr>
                <th>ID Katalog</th>
                <th>Nama Katalog</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <?php 
                while($katalog_Data = mysqli_fetch_array($katalog)){
                    echo "<tr>";
                    echo "<td>".$katalog_Data['id_katalog']."</td>";
                    echo "<td>".$katalog_Data['nama']."</td>";
                    echo "<td><a class='btn btn-primary' href='editKatalog.php?id_katalog=$katalog_Data[id_katalog]'> Edit Katalog </a> | <a class='btn btn-danger' href='deleteKatalog.php?id_katalog=$katalog_Data[id_katalog]'> Delete Katalog</a> </td>";
                    echo "</tr>";
                }
                ?>
            </tr>
        </table>
    </div>
    
</body>
</html>