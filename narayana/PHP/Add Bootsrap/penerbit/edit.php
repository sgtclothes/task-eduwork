<html>
<head>
	<title>Adding new penerbit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="./style.css">
    <link rel="icon" href="./resource/Logo.svg" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
	<style>
	body {
		background-image: url(./resource/background-2.svg);
		background-repeat: no-repeat;
		background-size: cover;
	}
  .ID-Text {
	text-align: center;
  }
  .go-home {
    width: 100%;
	/* margin-left: 285px; */
  }
  .go-home a {
    color: white;
    text-decoration: none;
  }
  .nama{
	font-weight: bold;
	font-size: 16px;
	/* color: #0C8F96; */
  }
  .input-text {
  width: 100%;
  padding: 8px 12px;
  margin: 8px 0;
  border: 1px solid #ccc;
  border-radius: 4px;
  }
  .send {
	background-color: #45a049;
	color: white;
	width: 100%;
  padding: 8px 12px;
  margin: 8px 0;
  border: 1px solid #45a049;
  border-radius: 4px;
  }
  .container {
	align-items: center;
	width: 700px;
	height: auto;
	border: 3px solid #ccc;
	background: rgba(255, 255, 255, 0.7);
	border-radius: 5px;
	padding: 20px;
	
  }
  .logo{
	padding: 20px;
    width:20%;
    margin:0 auto;
  }
</style>
</head>

<?php
	include_once("connect.php");
	$id_penerbit = $_GET['id_penerbit'];

    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit WHERE id_penerbit='$id_penerbit'");

    while($penerbit_data = mysqli_fetch_array($penerbit))
    {
    	$penerbit_id = $penerbit_data['id_penerbit'];
    	$nama_penerbit = $penerbit_data['nama_penerbit'];
    	$email = $penerbit_data['email'];
    	$telp = $penerbit_data['telp'];
    	$alamat = $penerbit_data['alamat'];

    }
?>
	<body>
	<div class="logo">
	<img src="./resource/logo-1.svg" height="60px">
</div>
	<div class="container">
	<form action="edit.php?id_penerbit=<?php echo $penerbit_id; ?>" method="post">
		<div>
			<h4 class="ID-Text">ID Penerbit: <?php echo $penerbit_id; ?></h4>
		</div>
		<div class="nama">Nama Penerbit</div>
		<div>
		<td><input class="input-text" type="text" name="nama_penerbit" value="<?php echo $nama_penerbit; ?>"></td>
		</div>
		<div class="nama">Email</div>
		<div>
		<td><input class="input-text" type="text" name="email" value="<?php echo $email; ?>"></td>
		</div>
		<div class="nama">Nomer Telepon</div>
		<div>
		<td><input class="input-text" type="text" name="telp" value="<?php echo $telp; ?>"></td>
		</div>
		<div class="nama">Alamat</div>
		<div>
		<td><input class="input-text" type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
		</div>
		<div>
		<input class="Send" type="submit" name="update" value="Update">
		</div>
		<button type="button" class="btn btn-primary go-home">	<a href="index.php">Go to Home</a></button>
</form>
</div>
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$penerbit_id = $_GET['id_penerbit'];
			$nama_penerbit = $_POST['nama_penerbit'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE penerbit SET nama_penerbit = '$nama_penerbit', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_penerbit = '$penerbit_id';");
			
			header("Location:index.php");
		}
	?>
</body>
</html>