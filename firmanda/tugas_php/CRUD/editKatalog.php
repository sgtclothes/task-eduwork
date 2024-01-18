
<?php
include_once ("connect.php");
$id_katalog = $_GET['id_katalog'];
$katalog = mysqli_query($conn,"SELECT * FROM katalog WHERE id_katalog = '$id_katalog'");

while($katalog_data = mysqli_fetch_array($katalog)){
    $id_katalog = $katalog_data['id_katalog'];
    $nama = $katalog_data['nama'];
}
?>
<!DOCTYPE html>
<head>

    <title>Edit Katalog</title>
</head>

<body>
    <a href="katalog.php">GO to Home</a>
    <form action="editKatalog.php?id_katalog=<?php echo $id_katalog; ?>" method="post">
        <table>
            <tr>
                <td>ID Katalog</td>
                <td><?php echo $id_katalog ?></td>
            </tr>
            <tr>
                <td>Nama Katalog</td>
                <td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
    <?php 
    if(isset($_POST['update'])){
        $id_katalog = $_GET['id_katalog'];
        $nama = $_POST['nama'];
        include_once("connect.php");
        $result = mysqli_query($conn,"UPDATE katalog SET nama = '$nama' WHERE id_katalog = '$id_katalog';");
        header ("Location:katalog.php");
    }
    ?>
</body>
</html>