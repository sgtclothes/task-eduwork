<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Katalog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
     include_once("connectDB.php");
     $id_katalog = $_GET['id_katalog'];
    $katalog = mysqli_query($conn, "SELECT * FROM katalog WHERE id_katalog='$id_katalog'");


    while ($katalog_data = mysqli_fetch_array($katalog)) {
        $nama = $katalog_data['nama'];
    }
    ?>

<div style="margin-left: 60px;" class="box-body">
 <div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <a href="katalog.php">Go To Home</a><br><br>
        <form action="editKatalog.php?id_katalog=<?php echo $id_katalog; ?>" method="post" >
            <div class="mb-3">
                <label class="form-label">ID Katalog</label>
                <?php echo $id_katalog ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Katalog</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>">
            </div>
        
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
        </div>
    </div>
</div>
</div>
<?php 
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];

    $update_query = "UPDATE katalog SET nama='$nama' WHERE id_katalog='$id_katalog'";

    if (mysqli_query($conn, $update_query)) {
        header("Location: katalog.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
</body>
</html>