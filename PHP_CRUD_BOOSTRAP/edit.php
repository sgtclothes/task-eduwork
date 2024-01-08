<html>
<head>
	<title>Edit Buku</title>
</head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">

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
 
<body>
	<div class="filter-img"></div>
	<div class="content-edit">
		<div class="shadow-sm">
			<a href="index.php">Kembali</a>
			<h3 class="d-flex justify-content-center align-items-center mt-2">Edit Data Buku</h3>
			<br/>
		 
			<form action="edit.php?isbn=<?php echo $isbn; ?>" method="post">
				<div class="form-group">
					<label for="isbn">ISBN</label>
					<input type="text" class="form-control" id="isbn" placeholder="<?php echo $isbn; ?>" disabled>
				</div>
				<div class="form-group">
					<label for="judul">Judul</label>
					<input type="text" class="form-control" id="judul" name="judul" placeholder="<?php echo $judul; ?>">
				</div>
				<div class="form-group">
					<label for="tahun">Tahun</label>
					<input type="text" class="form-control" id="tahun" name="tahun" placeholder="<?php echo $tahun; ?>">
				</div>
				<div class="form-group">
					<label for="penerbit">Penerbit</label>
					<select class="form-control" name="id_penerbit" id="penerbit">
						<?php 
							while($penerbit_data = mysqli_fetch_array($penerbit)) { 
								echo "<option ".($penerbit_data['id_penerbit'] == $id_penerbit ? 'selected' : '')." value='".$penerbit_data['id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="pengarang">Pengarang</label>
					<select class="form-control" name="id_pengarang" id="pengarang">
						<?php 
							while($pengarang_data = mysqli_fetch_array($pengarang)) {         
								echo "<option ".($pengarang_data['id_pengarang'] == $id_pengarang ? 'selected' : '')." value='".$pengarang_data['id_pengarang']."'>".$pengarang_data['nama_pengarang']."</option>";
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="katalog">Katalog</label>
					<select class="form-control" name="id_katalog" id="katalog">
						<?php 
							while($katalog_data = mysqli_fetch_array($katalog)) {         
								echo "<option ".($katalog_data['id_katalog'] == $id_katalog ? 'selected' : '')." value='".$katalog_data['id_katalog']."'>".$katalog_data['nama']."</option>";
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label for="qty_stok">Qty Stok</label>
					<input type="text" class="form-control" id="qty_stok" nama="qty_stok" placeholder="<?php echo $qty_stok; ?>" >
				</div>
				<div class="form-group">
					<label for="harga_pinjam">Harga Pinjam</label>
					<input type="text" class="form-control" id="harga_pinjam" nama="harga_pinjam" placeholder="<?php echo $harga_pinjam; ?>" >
				</div>

				<div class="d-flex justify-content-center align-items-center">
					<button class="btn btn-primary" type="submit" name="update" value="update" style="width: 10rem;">Update Buku</button>
				</div>
			</form>
		</div>
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

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>