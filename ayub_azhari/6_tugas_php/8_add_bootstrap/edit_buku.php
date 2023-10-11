<?php
	include_once("connect.php");
	$isbn = $_GET['isbn'];

	$buku = mysqli_query($mysqli, "SELECT * FROM buku WHERE isbn='$isbn'");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog");

    while($buku_data = mysqli_fetch_array($buku))
    {
    	$judul = $buku_data['judul'];
    	$isbn = $buku_data['isbn'];
    	$tahun = $buku_data['tahun'];
    	$id_penerbit = $buku_data['id_penerbit'];
    	$id_pengarang = $buku_data['id_pengarang'];
    	$id_katalog = $buku_data['id_katalog'];
    	$qty_stok = $buku_data['qty_stok'];
    	$harga_pinjam = $buku_data['harga_pinjam'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Buku</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="index.php">CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="index.php">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="pengarang.php">Pengarang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="penerbit.php">Penerbit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="katalog.php">Katalog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	<div class="container">
		<h4 class="text-center mt-3">Form Edit Buku</h4>
		<a class="btn btn-secondary my-3" href="index.php">Back</a>
		<form action="edit_buku.php?isbn=<?php echo $isbn; ?>" method="post" class="p-5 mb-3 shadow">
			<div class="mb-3">
				<label for="judul" class="form-label">Judul</label>
				<input type="text" class="form-control" name="judul" value="<?php echo $judul; ?>" id="judul">
			</div>
			<div class="mb-3">
				<label for="tahun" class="form-label">Tahun</label>
				<input type="text" class="form-control" name="tahun" value="<?php echo $tahun; ?>" id="tahun">
			</div>
			<div class="mb-3">
				<label for="pengarang" class="form-label">Pengarang</label>
				<select name="id_pengarang" class="form-control">
					<?php 
						while($pengarang_data = mysqli_fetch_array($pengarang)) {         
							echo "<option ".($pengarang_data['id_pengarang'] == $id_pengarang ? 'selected' : '')." value='".$pengarang_data['id_pengarang']."'>".$pengarang_data['nama_pengarang']."</option>";
						}
					?>
				</select>
			</div>
			<div class="mb-3">
				<label for="penerbit" class="form-label">Penerbit</label>
				<select name="id_penerbit" class="form-control">
					<?php 
						while($penerbit_data = mysqli_fetch_array($penerbit)) {         
							echo "<option ".($penerbit_data['id_penerbit'] == $id_penerbit ? 'selected' : '')." value='".$penerbit_data['id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";
						}
					?>
				</select>
			</div>
			<div class="mb-3">
				<label for="katalog" class="form-label">Katalog</label>
				<select name="id_katalog" class="form-control">
					<?php 
						while($katalog_data = mysqli_fetch_array($katalog)) {         
							echo "<option ".($katalog_data['id_katalog'] == $id_katalog ? 'selected' : '')." value='".$katalog_data['id_katalog']."'>".$katalog_data['nama']."</option>";
						}
					?>
				</select>
			</div>
			<div class="mb-3">
				<label for="qty_stok" class="form-label">Quantity</label>
				<input type="text" class="form-control" name="qty_stok" value="<?php echo $qty_stok; ?>" id="qty_stok">
			</div>
			<div class="mb-3">
				<label for="harga_pinjam" class="form-label">Harga Pinjam</label>
				<input type="text" class="form-control" name="harga_pinjam" value="<?php echo $harga_pinjam; ?>" id="harga_pinjam">
			</div>
			<button type="submit" name="update" class="btn btn-primary">Update</button>
		</form>
	</div>

	<?php
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$isbn = $_GET['isbn'];
			$judul = $_POST['judul'];
			$tahun = $_POST['tahun'];
			$id_penerbit = $_POST['id_penerbit'];
			$id_pengarang = $_POST['id_pengarang'];
			$id_katalog = $_POST['id_katalog'];
			$qty_stok = $_POST['qty_stok'];
			$harga_pinjam = $_POST['harga_pinjam'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE buku SET judul = '$judul', tahun = '$tahun', id_penerbit = '$id_penerbit', id_pengarang = '$id_pengarang', id_katalog = '$id_katalog', qty_stok = '$qty_stok', harga_pinjam = '$harga_pinjam' WHERE isbn = '$isbn';");
			
			header("Location:index.php");
		}
	?>
</body>
</html>
