<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Penerbit</title>
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
        <a href="penerbit.php">Go To Home</a><br><br>
        <form action="addPenerbit.php" method="post" name="form1">
            <div class="mb-3">
                <label class="form-label">ID Penerbit</label>
                <input type="text" class="form-control" name="id_penerbit">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Penerbit</label>
                <input type="text" class="form-control" name="nama_penerbit">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Telpon</label>
                <input type="text" class="form-control" name="telp">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>
        
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
</div>
    <?php 
   if (isset($_POST['submit'])) {
    $id_penerbit = $_POST['id_penerbit'];
    $nama_penerbit = $_POST['nama_penerbit'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    include_once("connectDB.php");

    $query = "INSERT INTO penerbit (id_penerbit, nama_penerbit, email, telp, alamat) 
              VALUES ('$id_penerbit', '$nama_penerbit', '$email', '$telp', '$alamat')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: penerbit.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
    ?>
</body>
</html>