<html>
<head>
	<title>Adding new pengarang</title>
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
	$id_katalog = $_GET['id_katalog'];

    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog WHERE id_katalog='$id_katalog'");

    while($katalog_data = mysqli_fetch_array($katalog))
    {
    	$nama_katalog = $katalog_data['nama'];
    }
?>
	<body>
	<div class="logo">
	<img src="./resource/logo-1.svg" height="60px">
</div>
	<div class="container">
	<form action="edit.php?id_katalog=<?php echo $id_katalog; ?>" method="post">
		<div>
			<h4 class="ID-Text">ID Katalog: <?php echo $id_katalog; ?></h4>
		</div>
		<div class="nama">Nama Katalog</div>
		<div>
		<td><input class="input-text" type="text" name="nama" value="<?php echo $nama_katalog; ?>"></td>
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

			$id_katalog = $_GET['id_katalog'];
			$nama_katalog = $_POST['nama'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE katalog SET nama = '$nama_katalog' WHERE id_katalog = '$id_katalog';");
			
			header("Location:index.php");
		}
	?>
</body>
</html>