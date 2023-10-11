<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Penerbit</title>
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
		<h4 class="text-center mt-3">Form Tambah Penerbit</h4>
		<a class="btn btn-secondary my-3" href="penerbit.php">Back</a>
		<form action="add_penerbit.php" method="post" class="p-5 mb-3 shadow">
			<div class="mb-3">
				<label for="id_penerbit" class="form-label">Id Penerbit</label>
				<input type="text" class="form-control" name="id_penerbit" id="id_penerbit">
			</div>
			<div class="mb-3">
				<label for="nama_penerbit" class="form-label">Nama Penerbit</label>
				<input type="text" class="form-control" name="nama_penerbit" id="nama_penerbit">
			</div>
			<div class="mb-3">
				<label for="email" class="form-label">Email</label>
				<input type="email" class="form-control" name="email" id="email">
			</div>
			<div class="mb-3">
				<label for="telp" class="form-label">Telepon</label>
				<input type="tel" class="form-control" name="telp" id="telp">
			</div>
			<div class="mb-3">
				<label for="alamat" class="form-label">Alamat</label>
				<input type="text" class="form-control" name="alamat" id="alamat">
			</div>
			<button type="submit" name="Submit" class="btn btn-primary">Submit</button>
		</form>
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
</body>
</html>
