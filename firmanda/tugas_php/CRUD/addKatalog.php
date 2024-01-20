<?php 
include_once("connect.php");
// $katalog = mysqli_query($conn,"SELECT * FROM katalog");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <title>Add Katalog</title>
</head>
<body class="card border-primary mb-3" style="max-width: 18rem;">
    <h5 class="card-header">tambahkan katalog baru</h5>
    <a href="katalog.php" class="btn btn-outline-primary"><-Go to Home</a>
    
    <form action="addKatalog.php" method="post" name="formKatalog1">
        <table >
            <tr>
                <td>ID Katalog</td>
                <td><input type="text" name="id_katalog"></td>
            </tr>
            <tr>
                <td>Nama Katalog</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add" class="btn btn-primary"></td>
            </tr>
        </table>
        
    </form>
    <?php 
        if(isset($_POST["Submit"])){
           
            $id_katalog = $_POST['id_katalog'];
            $nama =$_POST['nama'];
            include_once("connect.php");
            $result = mysqli_query($conn,"INSERT INTO katalog(id_katalog,nama) VALUES ('$id_katalog','$nama');");
            
            header ("Location:katalog.php");
        }
        ?>
</body>
</html>