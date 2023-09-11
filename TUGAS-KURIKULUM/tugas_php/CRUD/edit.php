<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
     include_once("connectDB.php");
     $isbn = $_GET['isbn'];
    $penerbit = mysqli_query($conn, "SELECT * FROM penerbit ");
    $buku = mysqli_query($conn, "SELECT * FROM buku WHERE isbn='$isbn'");
    $pengarang = mysqli_query($conn, "SELECT * FROM pengarang");
    $katalog = mysqli_query($conn, "SELECT * FROM katalog");

    while ($buku_data = mysqli_fetch_array($buku)) {
        $judul = $buku_data['judul'];
        $tahun = $buku_data['tahun'];
        $id_penerbit = $buku_data['id_penerbit'];
        $id_pengarang = $buku_data['id_pengarang'];
        $id_katalog = $buku_data['id_katalog'];
        $qty_stok = $buku_data['qty_stok'];
        $harga_pinjam = $buku_data['harga_pinjam'];
    }
    ?>

<div style="margin-left: 60px;" class="box-body">
 <div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <a href="index.php">Go To Home</a><br><br>
        <form action="edit.php?isbn=<?php echo $isbn; ?>" method="post" >
            <div class="mb-3">
                <label class="form-label">ISBN</label>
                <?php echo $isbn ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" value="<?php echo $judul ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Tahun</label>
                <input type="text" class="form-control" name="tahun"  value="<?php echo $tahun ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Penerbit</label>
                <select class="form-control" name="id_penerbit">
                    <?php 
                    while ($penerbit_data = mysqli_fetch_array($penerbit)) {
                        $selected = ($penerbit_data['id_penerbit'] == $id_penerbit) ? 'selected' : '';
                        echo "<option value='".$penerbit_data['id_penerbit']."' $selected>".$penerbit_data['nama_penerbit']."</option>";
                    };
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Pengarang</label>
                <select class="form-control" name="id_pengarang">
                    <?php 
                    while ($pengarang_data = mysqli_fetch_array($pengarang)) {
                        $selected = ($pengarang_data['id_pengarang'] == $id_pengarang) ? 'selected' : '';
                        echo "<option value='".$pengarang_data['id_pengarang']."' $selected>".$pengarang_data['nama_pengarang']."</option>";
                    };
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Katalog</label>
                <select class="form-control" name="id_katalog">
                    <?php 
                    while ($katalog_data = mysqli_fetch_array($katalog)) {
                        $selected = ($katalog_data['id_katalog'] == $id_katalog) ? 'selected' : '';
                        echo "<option value='".$katalog_data['id_katalog']."' $selected>".$katalog_data['nama']."</option>";
                    };
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity Stok</label>
                <input type="text" class="form-control" name="qty_stok"  value="<?php echo $qty_stok ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Pinjam</label>
                <input type="text" class="form-control" name="harga_pinjam"  value="<?php echo $harga_pinjam ?>">
            </div>
        
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
        </div>
    </div>
</div>
</div>
<?php 
if (isset($_POST['update'])) {
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $id_penerbit = $_POST['id_penerbit'];
    $id_pengarang = $_POST['id_pengarang'];
    $id_katalog = $_POST['id_katalog'];
    $qty_stok = $_POST['qty_stok'];
    $harga_pinjam = $_POST['harga_pinjam'];

    $update_query = "UPDATE buku SET judul='$judul', tahun='$tahun', id_penerbit='$id_penerbit', 
                     id_pengarang='$id_pengarang', id_katalog='$id_katalog', qty_stok='$qty_stok', 
                     harga_pinjam='$harga_pinjam' WHERE isbn='$isbn'";

    if (mysqli_query($conn, $update_query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
</body>
</html>