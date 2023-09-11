<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Penerbit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
     include_once("connectDB.php");
     $id_penerbit = $_GET['id_penerbit'];
    $penerbit = mysqli_query($conn, "SELECT * FROM penerbit WHERE id_penerbit='$id_penerbit'");


    while ($penerbit_data = mysqli_fetch_array($penerbit)) {
        $nama_penerbit = $penerbit_data['nama_penerbit'];
        $email = $penerbit_data['email'];
        $telp = $penerbit_data['telp'];
        $alamat = $penerbit_data['alamat'];
    }
    ?>

<div style="margin-left: 60px;" class="box-body">
 <div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <a href="penerbit.php">Go To Home</a><br><br>
        <form action="editPenerbit.php?id_penerbit=<?php echo $id_penerbit; ?>" method="post" >
            <div class="mb-3">
                <label class="form-label">ID Penerbit</label>
                <?php echo $id_penerbit ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Penerbit</label>
                <input type="text" class="form-control" name="nama_penerbit" value="<?php echo $nama_penerbit ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email"  value="<?php echo $email ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Telpon</label>
                <input type="text" class="form-control" name="telp"  value="<?php echo $telp ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat"  value="<?php echo $alamat ?>">
            </div>
        
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
        </div>
    </div>
</div>
</div>
<?php 
if (isset($_POST['update'])) {
    $nama_penerbit = $_POST['nama_penerbit'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $update_query = "UPDATE penerbit SET nama_penerbit='$nama_penerbit', email='$email', telp='$telp', 
                     alamat='$alamat' WHERE id_penerbit='$id_penerbit'";

    if (mysqli_query($conn, $update_query)) {
        header("Location: penerbit.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
</body>
</html>