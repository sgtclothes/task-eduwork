<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Katalog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    include_once("connectDB.php");
    ?>

<div style="margin-left: 60px;" class="box-body">
 <div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <a href="katalog.php">Go To Home</a><br><br>
        <form action="addKatalog.php" method="post" name="form1">
            <div class="mb-3">
                <label class="form-label">ID Katalog</label>
                <input type="text" class="form-control" name="id_katalog">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Katalog</label>
                <input type="text" class="form-control" name="nama">
            </div>
        
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
</div>
    <?php 
   if (isset($_POST['submit'])) {
    $id_katalog = $_POST['id_katalog'];
    $nama = $_POST['nama'];

    include_once("connectDB.php");

    $query = "INSERT INTO katalog (id_katalog, nama) 
              VALUES ('$id_katalog', '$nama')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: katalog.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
    ?>
</body>
</html>