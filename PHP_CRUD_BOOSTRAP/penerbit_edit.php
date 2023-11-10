<html>
<head>
	<title>Edit Penerbit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
</head>

<?php
	include_once("connect.php");
	$id_penerbit = $_GET['penerbit'];
    // $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit WHERE id_penerbit='$id_penerbit'");

    while($penerbit_data = mysqli_fetch_array($penerbit)) {            
        
        $id_penerbit = $penerbit_data['id_penerbit'];
    	$nama_penerbit = $penerbit_data['nama_penerbit'];
    	$email = $penerbit_data['email'];
    	$telp = $penerbit_data['telp'];
    	$alamat = $penerbit_data['alamat'];
    }
?>
 
<body>
	<div class="filter-img"></div>
	<div class="content-edit">
		<div class="shadow-sm">
			<a href="penerbit.php">Kembali</a>
			<h3 class="d-flex justify-content-center align-items-center mt-2">Edit Data Penerbit</h3>
			<br/>
		 
			<form action="penerbit_edit.php?penerbit=<?php echo $id_penerbit; ?>" method="post">
				<div class="form-group">
					<label for="id_penerbit">Id Penerbit</label>
					<input type="text" class="form-control" id="id_penerbit" placeholder="<?php echo $id_penerbit; ?>" disabled>
				</div>
				<div class="form-group">
					<label for="nama_penerbit">Nama Penerbit</label>
					<input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" placeholder="<?php echo $nama_penerbit; ?>">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email" placeholder="<?php echo $email; ?>">
				</div>
				<div class="form-group">
					<label for="telp">Telp</label>
					<input type="text" class="form-control" id="telp" name="telp" placeholder="<?php echo $telp; ?>">
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" class="form-control" id="alamat" name="alamat" placeholder="<?php echo $alamat; ?>">
				</div>
				<div class="d-flex justify-content-center align-items-center">
					<button class="btn btn-primary" type="submit" name="update" value="update" style="width: 10rem;">Update Penerbit</button>
				</div>
			</form>
		</div>
	</div>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id_penerbit = $_GET['penerbit'];
			$nama_penerbit = $_POST['nama_penerbit'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE penerbit SET nama_penerbit = '$nama_penerbit', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_penerbit = '$id_penerbit';");
			
			header("Location:penerbit.php");
		}
	?>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>