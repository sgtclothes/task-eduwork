<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    include_once("connectDB.php");
    $penerbit = mysqli_query($conn, "SELECT * FROM penerbit");
    $pengarang = mysqli_query($conn, "SELECT * FROM pengarang");
    $katalog = mysqli_query($conn, "SELECT * FROM katalog");
    ?>

<div style="margin-left: 60px;" class="box-body">
 <div class="row">
    <div class="col-md-6">
    <div class="form-group">
        <a href="index.php">Go To Home</a><br><br>
        <form action="add.php" method="post" name="form1">
            <div class="mb-3">
                <label class="form-label">ISBN</label>
                <input type="text" class="form-control" name="isbn">
            </div>
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul">
            </div>
            <div class="mb-3">
                <label class="form-label">Tahun</label>
                <input type="text" class="form-control" name="tahun">
            </div>
            <div class="mb-3">
                <label class="form-label">Penerbit</label>
                <select class="form-control" name="id_penerbit">
                    <?php 
                    while ($penerbit_data = mysqli_fetch_array($penerbit)) {
                        echo "<option value='".$penerbit_data['id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";
                    };
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Pengarang</label>
                <select class="form-control" name="id_pengarang">
                    <?php 
                    while ($pengarang_data = mysqli_fetch_array($pengarang)) {
                        echo "<option value='".$pengarang_data['id_pengarang']."'>".$pengarang_data['nama_pengarang']."</option>";
                    };
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Katalog</label>
                <select class="form-control" name="id_katalog">
                    <?php 
                    while ($katalog_data = mysqli_fetch_array($katalog)) {
                        echo "<option value='".$katalog_data['id_katalog']."'>".$katalog_data['nama']."</option>";
                    };
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity Stok</label>
                <input type="text" class="form-control" name="qty_stok">
            </div>
            <div class="mb-3">
                <label class="form-label">Harga Pinjam</label>
                <input type="text" class="form-control" name="harga_pinjam">
            </div>
        
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
</div>
    <?php 
   if (isset($_POST['submit'])) {
    $isbn = $_POST['isbn'];
    $judul = $_POST['judul'];
    $tahun = $_POST['tahun'];
    $id_penerbit = $_POST['id_penerbit'];
    $id_pengarang = $_POST['id_pengarang'];
    $id_katalog = $_POST['id_katalog'];
    $qty_stok = $_POST['qty_stok'];
    $harga_pinjam = $_POST['harga_pinjam'];

    include_once("connectDB.php");

    $query = "INSERT INTO buku (isbn, judul, tahun, id_penerbit, id_pengarang, id_katalog, qty_stok, harga_pinjam) 
              VALUES ('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
    ?>
</body>
</html>