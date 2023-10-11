<?php
	include_once("connect.php");
	$id_penerbit = $_GET['id_penerbit'];

	$penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit WHERE id_penerbit='$id_penerbit'");

    while($penerbit_data = mysqli_fetch_array($penerbit))
    {
    	$id_penerbit = $penerbit_data['id_penerbit'];
    	$nama_penerbit = $penerbit_data['nama_penerbit'];
    	$email = $penerbit_data['email'];
    	$telp = $penerbit_data['telp'];
    	$alamat = $penerbit_data['alamat'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Penerbit</title>
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
		<h4 class="text-center mt-3">Form Edit Penerbit</h4>
		<a href="penerbit.php" class="btn btn-secondary my-3">Back</a>
		<form action="edit_penerbit.php?id_penerbit=<?php echo $id_penerbit; ?>" class="p-5 mb-3 shadow" method="post">
			<div class="mb-3">
				<label for="nama_penerbit" class="form-label">Nama Penerbit</label>
				<input type="text" class="form-control" name="nama_penerbit" value="<?php echo $nama_penerbit; ?>" id="nama_penerbit">
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

			$id_penerbit = $_GET['id_penerbit'];
			$nama_penerbit = $_POST['nama_penerbit'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE penerbit SET nama_penerbit = '$nama_penerbit', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_penerbit = '$id_penerbit';");
			
			header("Location:penerbit.php");
		}
	?>
</body>
</html>
