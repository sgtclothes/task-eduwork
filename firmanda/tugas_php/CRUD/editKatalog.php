
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <title>Edit Katalog</title>
</head>

<body class="card border-primary mb-3" style="max-width: 18rem;">
    <h5 class="card-header">Edit Katalog</h5>
    <a href="katalog.php" class="btn btn-outline-primary"><-GO to Home</a>
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
                <td><input type="submit" name="update" value="update" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    <?php 
    if(isset($_POST['update'])){
        $id_katalog = $_GET['id_katalog'];
        $nama = $_POST['nama'];
        include_once("connect.php");
        // echo "terupdate";
        $result = mysqli_query($conn,"UPDATE katalog SET nama = '$nama' WHERE id_katalog = '$id_katalog';");
        header ("Location:katalog.php");
    }
    ?>
</body>
</html>