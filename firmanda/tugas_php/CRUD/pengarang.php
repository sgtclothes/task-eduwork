<?php 
    include_once("connect.php");
    $pengarang= mysqli_query($conn,"SELECT * FROM pengarang");
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <title>Pengarang</title>
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
                    <a href="pengarang.php" class="nav-link active">Pengarang</a>
                </li>
                <li class="nav-item">
                    <a href="katalog.php" class="nav-link">Katalog</a>
                </li>

            </ul>
       
    </div>
    <div class="card-body">
        <h5 class="card-title"> table content pengarang</h5>
        <a href="addPengarang.php" class="btn btn-outline-primary">Tambah Pengarang</a>
        <table border="1" class="table table-striped table-hover">
            <tr>
                <th>Id Pengarang</th>
                <th>Nama Pengarang</th>
                <th>Email Pengarang</th>
                <th>Nomor Telepon</th>
                <th>Alamat Pengarang</th>
                <th>Aksi</th>
            </tr>
            <?php 
                while($pengarang_data = mysqli_fetch_assoc($pengarang)){
                    echo "<tr>";
                    echo "<td>".$pengarang_data['id_pengarang']."</td>";
                    echo "<td>".$pengarang_data['nama_pengarang']."</td>";
                    echo "<td>".$pengarang_data['email']."</td>";
                    echo "<td>".$pengarang_data['telp']."</td>";
                    echo "<td>".$pengarang_data['alamat']."</td>";
                    echo "<td><a class='btn btn-primary' href='editPengarang.php?id_pengarang=$pengarang_data[id_pengarang]'>Edit Pengarang</a> | <a class='btn btn-danger' href='deletePengarang.php?id_pengarang=$pengarang_data[id_pengarang]'>Delete Pengarang</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>