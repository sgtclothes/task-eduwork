<html>
<head>
    <title>Add obat</title>
</head>

<?php
    include_once("connect.php");
    $merek = mysqli_query($mysqli, "SELECT * FROM merek");
    $obat = mysqli_query($mysqli, "SELECT * FROM obat");
?>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>merek</td>
                <td>
                    <select name="merek">
                        <?php 
                            while($merek_data = mysqli_fetch_array($merek)) {         
                                echo "<option value='".$merek_data['id_merek']."'>".$merek_data['nama_merek']."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
        
            <tr> 
                <td>nama_obat</td>
                <td>
                    <select name="id_nama_obat">
                        <?php 
                            while($nama_obat_data = mysqli_fetch_array($nama_obat)) {         
                                echo "<option value='".$nama_obat_data['id_nama_obat']."'>".$nama_obat_data['nama_nama_obat']."</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add obat"></td>
            </tr>
        </table>
    </form>
    
    <?php
     
        // Check If form submitted, insert form data into users table.
        if(isset($_POST['Submit'])) {
            $id_merek = $_POST['merek'];
            $id_nama_obat = $_POST['id_nama_obat'];
            $harga = $_POST['harga'];
            
            include_once("connect.php");

            $result = mysqli_query($mysqli, "INSERT INTO obat (merek_obat, nama_obat, harga) VALUES ('$id_merek', '$id_nama_obat', '$harga')");
            
            header("Location:index.php");
        }
    ?>
</body>
</html>
