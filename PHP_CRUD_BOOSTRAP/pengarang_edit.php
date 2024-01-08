<html>
<head>
	<title>Edit Pengarang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
</head>

<?php
	include_once("connect.php");
	$id_pengarang = $_GET['pengarang'];
    // $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang WHERE id_pengarang='$id_pengarang'");

    while($pengarang_data = mysqli_fetch_array($pengarang)) {            
        
        $id_pengarang = $pengarang_data['id_pengarang'];
    	$nama_pengarang = $pengarang_data['nama_pengarang'];
    	$email = $pengarang_data['email'];
    	$telp = $pengarang_data['telp'];
    	$alamat = $pengarang_data['alamat'];
    }
?>
 
<body>
	<div class="filter-img"></div>
	<div class="content-edit">
		<div class="shadow-sm">
			<a href="pengarang.php">Kembali</a>
			<h3 class="d-flex justify-content-center align-items-center mt-2">Edit Data Pengarang</h3>
			<br/>
		 
			<form action="pengarang_edit.php?pengarang=<?php echo $id_pengarang; ?>" method="post">
				<div class="form-group">
					<label for="id_pengarang">Id Pengarang</label>
					<input type="text" class="form-control" id="id_pengarang" placeholder="<?php echo $id_pengarang; ?>" disabled>
				</div>
				<div class="form-group">
					<label for="nama_pengarang">Nama Pengarang</label>
					<input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" placeholder="<?php echo $nama_pengarang; ?>">
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
					<button class="btn btn-primary" type="submit" name="update" value="update" style="width: 10rem;">Update Pengarang</button>
				</div>	
			</form>
		</div>
	</div>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id_pengarang = $_GET['pengarang'];
			$nama_pengarang = $_POST['nama_pengarang'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE pengarang SET nama_pengarang = '$nama_pengarang', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_pengarang = '$id_pengarang';");
			
			header("Location:pengarang.php");
		}
	?>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>