<html>
<head>
	<title>Edit Katalog</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
</head>

<?php
	include_once("connect.php");
	$id_katalog = $_GET['katalog'];
    // $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog WHERE id_katalog='$id_katalog'");

    while($katalog_data = mysqli_fetch_array($katalog)) {            
        
        $id_katalog = $katalog_data['id_katalog'];
    	$nama = $katalog_data['nama'];
    }
?>
 
<body>
	<div class="filter-img"></div>
	<div class="content-edit">
		<div class="shadow-sm">
			<a href="katalog.php">Kembali</a>
			<h3 class="d-flex justify-content-center align-items-center mt-2">Edit Data Katalog</h3>
			<br/>
		 
			<form action="katalog_edit.php?katalog=<?php echo $id_katalog; ?>" method="post">
				<div class="form-group">
					<label for="id_katalog">Id Katalog</label>
					<input type="text" class="form-control" id="id_katalog" placeholder="<?php echo $id_katalog; ?>" disabled>
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama" placeholder="<?php echo $nama; ?>">
				</div>
				<div class="d-flex justify-content-center align-items-center">
					<button class="btn btn-primary" type="submit" name="update" value="update" style="width: 10rem;">Update Katalog</button>
				</div>	
			</form>
		</div>
	</div>
	
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id_katalog = $_GET['katalog'];
			$nama = $_POST['nama'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE katalog SET nama = '$nama' WHERE id_katalog = '$id_katalog';");
			
			header("Location:katalog.php");
		}
	?>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>