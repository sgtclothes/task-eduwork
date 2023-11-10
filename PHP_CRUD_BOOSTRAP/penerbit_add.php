<html>
<head>
	<title>Add Penerbit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
</head>

<?php
	include_once("connect.php");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
?>
 
<body>
	<div class="filter-img"></div>
	<div class="content-edit">
		<div class="shadow-sm">
			<a href="penerbit.php">Kembali</a>
			<h3 class="d-flex justify-content-center align-items-center mt-2">Tambah Data Penerbit</h3>
			<br/>
		 
			<form action="penerbit_add.php" method="post" name="form1">
				<div class="form-group">
					<label for="id_penerbit">Id Penerbit</label>
					<input type="text" class="form-control" id="id_penerbit" name="id_penerbit">
				</div>
				<div class="form-group">
					<label for="nama_penerbit">Nama Penerbit</label>
					<input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
					<label for="telp">Telp</label>
					<input type="text" class="form-control" id="telp" name="telp">
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" class="form-control" id="alamat" name="alamat">
				</div>
				<div class="d-flex justify-content-center align-items-center">
					<button class="btn btn-primary" type="submit" name="Submit" value="Add" style="width: 10rem;">Tambah Penerbit</button>
				</div>
			</form>
		</div>
	</div>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['Submit'])) {
			$id_penerbit = $_POST['id_penerbit'];
			$nama_penerbit = $_POST['nama_penerbit'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) VALUES ('$id_penerbit', '$nama_penerbit', '$email', '$telp', '$alamat');");
			
			header("Location:penerbit.php");
		}
	?>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>