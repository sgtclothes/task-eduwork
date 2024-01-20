<?php 
    include_once("connect.php");
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <title>Tambah Pengarang</title>
</head>
<body class="card border-primary mb-3" style="max-width: 20rem;">
    <h5 class="card-header">tambahkan pengarang baru</h5>
    <a href="pengarang.php" class="btn btn-outline-primary"><-Go home</a>
    <form action="addPengarang.php" method="post">
        <table>
            <tr>
                <td>Id Pengarang</td>
                <td><input type="text" name="id_pengarang" ></td>
            </tr>
            <tr>
                <td>Nama Pengarang</td>
                <td><input type="text" name="nama_pengarang"></td>
            </tr>
            <tr>
                <td>Email Pengarang</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="text" name="nomor"></td>
            </tr>
            <tr>
                <td>Alamat Pengarang</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="add" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $id_pengarang = $_POST['id_pengarang'];
            $nama_pengarang = $_POST['nama_pengarang'];
            $email = $_POST['email'];
            $nomor = $_POST['nomor'];
            $alamat = $_POST['alamat'];
            include_once("connect.php");
            $result = mysqli_query($conn,"INSERT INTO pengarang(id_pengarang,nama_pengarang,email,telp,alamat) VALUES ('$id_pengarang','$nama_pengarang','$email','$nomor','$alamat');");
            header ("Location:pengarang.php");
        }
    ?>
</body>
</html>