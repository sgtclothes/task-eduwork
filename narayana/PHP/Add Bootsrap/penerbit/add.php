<html>
<head>
<title>Adding new penerbit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="./style.css">
    <link rel="icon" href="./resource/Logo.svg" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<style>
  .Go-Home {
    width:10%;
    margin:0 auto;
    font-size: 14px;
    margin: auto;
    padding: 10px;
  }
  .Go-Home a {
    color: white;
    text-decoration: none;
  }
  .nama{
	font-weight: bold;
	font-size: 16px;
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
	border-radius: 5px;
	padding: 20px;
	background: rgba(255, 255, 255, 0.7);
  }
  .go-home {
    width: 100%;
	/* margin-left: 285px; */
  }
  .go-home a {
    color: white;
    text-decoration: none;
  }
  .logo{
	padding: 20px;
    width:20%;
    margin:0 auto;
  }
  body {
		background-image: url(./resource/background-2.svg);
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>

<?php
	include_once("connect.php");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
?>
 
<body>
<div class="logo">
 <img src="./resource/logo-1.svg" height="60px">
</div>

	<div class="container">
<form action="add.php" method="post" name="form1">
		<div class="nama">ID Penerbit</div>
		<div>
		<td><input class="input-text" type="text" name="id_penerbit" placeholder="ID Penerbit..."></td>
		</div>
		<div class="nama">Nama</div>
		<div>
		<td><input class="input-text" type="text" name="nama" placeholder="Nama Penerbit..."></td>
		</div>
		<div class="nama">Nomer Telepon</div>
		<div>
		<td><input class="input-text" type="text" name="telp" placeholder="Nomer Telepon Penerbit...."></td>
		</div>
		<div class="nama">Email</div>
		<div>
		<td><input class="input-text" type="text" name="email" placeholder="Email Penerbit...."></td>
		</div>
		<div class="nama">Alamat</div>
		<div>
		<td><input class="input-text" type="text" name="alamat" placeholder="Alamat Penerbit..."></td>
		</div>
		<div>
		<input class="Send" type="submit" name="Submit" value="Add">
		<button type="button" class="btn btn-primary go-home">	<a href="index.php">Go to Home</a></button>
		</div>
</form>
</div>
	<?php
	 
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['Submit'])) {
			$id_penerbit = $_POST['id_penerbit'];
			$nama = $_POST['nama'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) VALUES ('$id_penerbit', '$nama', '$email', '$telp', '$alamat');");
			
			header("Location:index.php");
		}
	?>
</body>
</html>