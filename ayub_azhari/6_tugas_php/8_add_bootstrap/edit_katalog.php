<?php
	include_once("connect.php");
	$id_katalog = $_GET['id_katalog'];

	$katalog = mysqli_query($mysqli, "SELECT * FROM katalog WHERE id_katalog = '$id_katalog'");

    while($katalog_data = mysqli_fetch_array($katalog))
    {
    	$id_katalog = $katalog_data['id_katalog'];
    	$nama = $katalog_data['nama'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Katalog</title>
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
		<h4 class="text-center mt-3">Form Edit Katalog</h4>
		<a class="btn btn-secondary my-3" href="katalog.php">Back</a>
		<form action="edit_katalog.php?id_katalog=<?php echo $id_katalog; ?>" method="post" class="p-5 mb-3 shadow">
			<div class="mb-3">
				<label for="nama" class="form-label">Nama Katalog</label>
				<input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" id="nama">
			</div>
			<button type="submit" name="update" class="btn btn-primary">Update</button>
		</form>
	</div>
	
	<?php
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id_katalog = $_GET['id_katalog'];
			$nama = $_POST['nama'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE katalog SET nama = '$nama' WHERE id_katalog = '$id_katalog';");
			
			header("Location:katalog.php");
		}
	?>
</body>
</html>
