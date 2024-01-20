<?php 
    include_once("connect.php");
    $id_pengarang = $_GET['id_pengarang'];
    $pengarang = mysqli_query($conn,"SELECT * FROM pengarang WHERE id_pengarang = '$id_pengarang'");
    while($pengarang_data = mysqli_fetch_array($pengarang)){
        $id_pengarang = $pengarang_data['id_pengarang'];
        $nama_pengarang =$pengarang_data['nama_pengarang'];
        $email =$pengarang_data['email'];
        $telp =$pengarang_data['telp'];
        $alamat =$pengarang_data['alamat'];
    }
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <title>Edit Pengarang</title>
</head>
<body class="card border-primary mb-3" style="max-width: 18rem;">
    <h5 class="card-header">Edit Pengarang</h5>
    <a href="pengarang.php" class="btn btn-outline-primary"><-Go Home</a>
    <form action="editPengarang.php?id_pengarang=<?php echo $id_pengarang?>" method="post">
        <table>
            <tr>
                <td>Id Pengarang</td>
                <td><?php echo $id_pengarang ?></td>
            </tr>
            <tr>
                <td>Nama Pengarang</td>
                <td><input type="text" name="nama_pengarang" value="<?php echo $nama_pengarang ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email ?>"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="text" name="telp" value="<?php echo $telp ?>"></td>
            </tr>
            <tr>
                <td>Alamat Pengarang</td>
                <td><input type="text" name="alamat" value="<?php echo $alamat ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="update" value="update" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    <?php 
        if(isset($_POST['update'])){
            $id_pengarang = $_GET['id_pengarang'];
            $nama_pengarang = $_POST['nama_pengarang'];
            $email = $_POST['email'];
            $telp = $_POST['telp'];
            $alamat = $_POST['alamat'];
            include_once("connect.php");
            $result= mysqli_query($conn,"UPDATE pengarang SET nama_pengarang='$nama_pengarang',email='$email',telp='$telp',alamat='$alamat' WHERE id_pengarang = '$id_pengarang';");
            header("Location:pengarang.php");
        }
    ?>
</body>
</html>