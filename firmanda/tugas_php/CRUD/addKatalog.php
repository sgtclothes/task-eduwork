<?php 
include_once("connect.php");
// $katalog = mysqli_query($conn,"SELECT * FROM katalog");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Katalog</title>
</head>
<body>
    <a href="katalog.php"> Go to Katalog's Home</a>
    
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
                <td><input type="submit" name="Submit" value="Add"></td>
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