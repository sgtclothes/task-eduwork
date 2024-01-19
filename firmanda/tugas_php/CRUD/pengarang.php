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
<body>
    <center>
        <a href="index.php">Buku</a>
        <a href="penerbit.php">Penerbit</a>
        <a href="pengarang.php">Pengarang</a>
        <a href="katalog.php">Katalog</a>
    </center>
    <a href="addPengarang.php">Tambah Pengarang</a>
    <table border="1">
        <tr>
            <th>Id Pengarang</th>
            <th>Nama Pengarang</th>
            <th>Email Pengarang</th>
            <th>Nomor Telepon</th>
            <th>Alamat Pengarang</th>
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
</body>
</html>