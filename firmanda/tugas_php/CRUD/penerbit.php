<?php 
include_once("connect.php");
$penerbit = mysqli_query($conn,"SELECT * FROM penerbit");

?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <title>Penerbit</title>
</head>
<body class="card text-center">
    <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Buku</a>
                </li>
                <li class="nav-item">
                    <a href="penerbit.php" class="nav-link active">Penerbit</a>
                </li>
                <li class="nav-item">
                    <a href="pengarang.php" class="nav-link">Pengarang</a>
                </li>
                <li class="nav-item">
                    <a href="katalog.php" class="nav-link">Katalog</a>
                </li>

            </ul>
       
    </div>
    <div class="card-body">

        <h5 class="card-title"> table content penerbit</h5>
        <a href="addPenerbit.php" class="btn btn-outline-primary">Tambah Penerbit</a>
        <table border="1" class="table table-striped table-hover">
            <tr>
                <th>Id Penerbit</th>
                <th>Nama Penerbit</th>
                <th>Email Penerbit</th>
                <th>Telepon Penerbit</th>
                <th>Alamat Penerbit</th>
                <th>Aksi</th>
            </tr>
            <?php 
            while($penerbit_data = mysqli_fetch_array($penerbit)){
                echo "<tr>";
                echo "<td>".$penerbit_data['id_penerbit']."</td>";
                echo "<td>".$penerbit_data['nama_penerbit']."</td>";
                echo "<td>".$penerbit_data['email'] ."</td>";
                echo "<td>".$penerbit_data['telp'] ."</td>";
                echo "<td>".$penerbit_data['alamat'] ."</td>";
                echo "<td> <a class= 'btn btn-primary' href= 'editPenerbit.php?id_penerbit=$penerbit_data[id_penerbit]'> Edit penerbit </a> | <a class='btn btn-danger' href='deletePenerbit.php?id_penerbit=$penerbit_data[id_penerbit]'> Delete Penerbit</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
