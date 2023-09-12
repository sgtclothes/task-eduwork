<html>
<head>
	<title>Adding new books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="./style.css">
    <link rel="icon" href="./resource/Logo.svg" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
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
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog");
?>
<body>

<div class="logo">
 <img src="./resource/logo-1.svg" height="60px">
</div>
<div class="container">
<form action="add.php" method="post" name="form1">
		<div class="nama">ISBN</div>
		<div>
			<input class="input-text" type="text" name="isbn" placeholder="ISBN (000-001)">
		</div>
		<div class="nama">Judul</div>
		<div>
			<input class="input-text" type="text" name="judul" placeholder="Judul (Buku Cerita)">
		</div>
		<div class="nama">Tahun</div>
		<div>
		<input class="input-text" type="text" name="tahun" placeholder="Tahun (2023)">
		</div>
		<div class="nama">Penerbit</div>
		<div>
		<select class="select-text form-select mb-3" name="id_penerbit">
						<?php 
						    while($penerbit_data = mysqli_fetch_array($penerbit)) {         
						    	echo "<option value='".$penerbit_data['id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";
						    }
						?>
					</select>
		</div>
		<div class="nama">Pengarang</div>
		<div>
		<select class="select-text form-select mb-3" name="id_pengarang">
						<?php 
						    while($pengarang_data = mysqli_fetch_array($pengarang)) {         
						    	echo "<option value='".$pengarang_data['id_pengarang']."'>".$pengarang_data['nama_pengarang']."</option>";
						    }
						?>
					</select>
		</div>
		<div class="nama">Katalog</div>
		<div>
		<select class="select-text form-select mb-3" name="id_katalog">
						<?php 
						    while($katalog_data = mysqli_fetch_array($katalog)) {         
						    	echo "<option value='".$katalog_data['id_katalog']."'>".$katalog_data['nama']."</option>";
						    }
						?>
					</select>
		</div>
		<div class="nama">Qty Stok</div>
		<div>
		<td><input class="input-text" type="text" name="qty_stok" placeholder="STOCK (11)"></td>
		</div>
		<div class="nama">Harga Pinjam</div>
		<div>
		<td><input class="input-text" type="text" name="harga_pinjam" placeholder="Harga Pinjam (5000)"></td>
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
			$isbn = $_POST['isbn'];
			$judul = $_POST['judul'];
			$tahun = $_POST['tahun'];
			$id_penerbit = $_POST['id_penerbit'];
			$id_pengarang = $_POST['id_pengarang'];
			$id_katalog = $_POST['id_katalog'];
			$qty_stok = $_POST['qty_stok'];
			$harga_pinjam = $_POST['harga_pinjam'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) VALUES ('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$qty_stok', '$harga_pinjam');");
			
			header("Location:index.php");
		}
	?>
</body>
</html>