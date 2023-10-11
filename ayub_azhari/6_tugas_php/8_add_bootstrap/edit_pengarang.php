<?php
	include_once("connect.php");
	$id_pengarang = $_GET['id_pengarang'];

	$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang WHERE id_pengarang = '$id_pengarang'");

    while($pengarang_data = mysqli_fetch_array($pengarang))
    {
    	$id_pengarang = $pengarang_data['id_pengarang'];
    	$nama_pengarang = $pengarang_data['nama_pengarang'];
    	$email = $pengarang_data['email'];
    	$telp = $pengarang_data['telp'];
    	$alamat = $pengarang_data['alamat'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Pengarang</title>
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
		<h4 class="text-center mt-3">Form Edit Pengarang</h4>
		<a href="pengarang.php" class="btn btn-secondary my-3">Back</a>
		<form action="edit_pengarang.php?id_pengarang=<?php echo $id_pengarang; ?>" class="p-5 mb-3 shadow" method="post">
			<div class="mb-3">
				<label for="nama_pengarang" class="form-label">Nama Pengarang</label>
				<input type="text" class="form-control" name="nama_pengarang" value="<?php echo $nama_pengarang; ?>" id="nama_pengarang">
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email</label>
				<input type="email" class="form-control" name="email" value="<?php echo $email; ?>" id="email">
			</div>
			<div class="mb-3">
				<label for="telp" class="form-label">Telepon</label>
				<input type="text" class="form-control" name="telp" value="<?php echo $telp; ?>" id="telp">
			</div>
			<div class="mb-3">
				<label for="alamat" class="form-label">Alamat</label>
				<input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>" id="alamat">
			</div>
			<button class="btn btn-primary" type="submit" name="update">Update</button>
		</form>
	</div>
	
	<?php
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id_pengarang = $_GET['id_pengarang'];
			$nama_pengarang = $_POST['nama_pengarang'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE pengarang SET nama_pengarang = '$nama_pengarang', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_pengarang = '$id_pengarang';");
			
			header("Location:pengarang.php");
		}
	?>
</body>
</html>
