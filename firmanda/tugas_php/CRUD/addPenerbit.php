<?php 
    include_once("connect.php");
?>

<!DOCTYPE html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <title>tambah Penerbit</title>
</head>
<body class="card border-primary mb-3" style="max-width: 18rem;">
<h5 class="card-header">tambahkan penerbit baru</h5>
    <a href="penerbit.php" class="btn btn-outline-primary"><-Go Home</a>
    <form action="addPenerbit.php" method="post">
        <table>
            <tr>
                <td>Id Penerbit </td>
                <td><input type="text" name="id_penerbit"></td>
            </tr>
            <tr>
                <td>Nama Penerbit </td>
                <td><input type="text" name="nama_penerbit"></td>
            </tr>
            <tr>
                <td>Email Penerbit </td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Nomor Telepon </td>
                <td><input type="text" name="telp"></td>
            </tr>
            <tr>
                <td>Alamat Penerbit </td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    <?php 
        if(isset($_POST['submit'])){
            $id_penerbit = $_POST['id_penerbit'];
            $nama_penerbit = $_POST['nama_penerbit'];
            $email = $_POST['email'];
            $telp = $_POST['telp'];
            $alamat= $_POST['alamat'];
            include_once("connect.php");
            $result = mysqli_query($conn,"INSERT INTO penerbit(id_penerbit,nama_penerbit,email,telp,alamat) VALUES ('$id_penerbit','$nama_penerbit','$email','$telp','$alamat');");
            header("Location:penerbit.php");

        }
    ?>
</body>
</html>