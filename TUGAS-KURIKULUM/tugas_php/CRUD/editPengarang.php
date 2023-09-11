<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengarang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
     include_once("connectDB.php");
     $id_pengarang = $_GET['id_pengarang'];
    $pengarang = mysqli_query($conn, "SELECT * FROM pengarang WHERE id_pengarang='$id_pengarang'");


    while ($pengarang_data = mysqli_fetch_array($pengarang)) {
        $nama_pengarang = $pengarang_data['nama_pengarang'];
        $email = $pengarang_data['email'];
        $telp = $pengarang_data['telp'];
        $alamat = $pengarang_data['alamat'];
    }
    ?>

<div style="margin-left: 60px;" class="box-body">
 <div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <a href="pengarang.php">Go To Home</a><br><br>
        <form action="editPengarang.php?id_pengarang=<?php echo $id_pengarang; ?>" method="post" >
            <div class="mb-3">
                <label class="form-label">ID Pengarang</label>
                <?php echo $id_pengarang ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Pengarang</label>
                <input type="text" class="form-control" name="nama_pengarang" value="<?php echo $nama_pengarang ?>">
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
    $nama_pengarang = $_POST['nama_pengarang'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $update_query = "UPDATE pengarang SET nama_pengarang='$nama_pengarang', email='$email', telp='$telp', 
                     alamat='$alamat' WHERE id_pengarang='$id_pengarang'";

    if (mysqli_query($conn, $update_query)) {
        header("Location: pengarang.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
</body>
</html>