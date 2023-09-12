<html>
<head>
	<title>Adding new books</title>
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
	$isbn = $_GET['isbn'];

	$buku = mysqli_query($mysqli, "SELECT * FROM buku WHERE isbn='$isbn'");
    $penerbit = mysqli_query($mysqli, "SELECT * FROM penerbit");
    $pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang");
    $katalog = mysqli_query($mysqli, "SELECT * FROM katalog");

    while($buku_data = mysqli_fetch_array($buku))
    {
    	$judul = $buku_data['judul'];
    	$isbn = $buku_data['isbn'];
    	$tahun = $buku_data['tahun'];
    	$id_penerbit = $buku_data['id_penerbit'];
    	$id_pengarang = $buku_data['id_pengarang'];
    	$id_katalog = $buku_data['id_katalog'];
    	$qty_stok = $buku_data['qty_stok'];
    	$harga_pinjam = $buku_data['harga_pinjam'];
    }
?>
 
 <body>
<div class="logo">
 <img src="./resource/logo-1.svg" height="60px">
</div>
	<div class="container">
	<form action="edit.php?isbn=<?php echo $isbn; ?>" method="post">
		<div>
			<h4 class="ID-Text">ISBN: <?php echo $isbn; ?></h4>
		</div>
		<div class="nama">Judul</div>
		<div>
			<input class="input-text" type="text" name="judul" value="<?php echo $judul; ?>">
		</div>
		<div class="nama">Tahun</div>
		<div>
			<input class="input-text" type="text" name="tahun" value="<?php echo $tahun; ?>">
		</div>
		<div class="nama">Penerbit</div>
		<div>
		<select class="select-text form-select mb-3" name="id_penerbit">
						<?php 
						    while($penerbit_data = mysqli_fetch_array($penerbit)) {         
						    	echo "<option ".($penerbit_data['id_penerbit'] == $id_penerbit ? 'selected' : '')." value='".$penerbit_data['id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";
						    }
						?>
					</select>
		</div>
		<div class="nama">Pengarang</div>
		<div>
		<select class="select-text form-select mb-3" name="id_pengarang">
						<?php 
						    while($pengarang_data = mysqli_fetch_array($pengarang)) {         
						    	echo "<option ".($pengarang_data['id_pengarang'] == $id_pengarang ? 'selected' : '')." value='".$pengarang_data['id_pengarang']."'>".$pengarang_data['nama_pengarang']."</option>";
						    }
						?>
					</select>
		</div>
		<div class="nama">Katalog</div>
		<div>
		<select class="select-text form-select mb-3" name="id_katalog">
						<?php 
						    while($katalog_data = mysqli_fetch_array($katalog)) {         
						    	echo "<option ".($katalog_data['id_katalog'] == $id_katalog ? 'selected' : '')." value='".$katalog_data['id_katalog']."'>".$katalog_data['nama']."</option>";
						    }
						?>
					</select>
		</div>
		<div class="nama">Qty Stok</div>
		<div>
		<td><input class="input-text" type="text" name="qty_stok" value="<?php echo $qty_stok; ?>"></td>
		</div>
		<div class="nama">Harga Pinjam</div>
		<div>
		<td><input class="input-text" type="text" name="harga_pinjam" value="<?php echo $harga_pinjam; ?>"></td>
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

			$isbn = $_GET['isbn'];
			$judul = $_POST['judul'];
			$tahun = $_POST['tahun'];
			$id_penerbit = $_POST['id_penerbit'];
			$id_pengarang = $_POST['id_pengarang'];
			$id_katalog = $_POST['id_katalog'];
			$qty_stok = $_POST['qty_stok'];
			$harga_pinjam = $_POST['harga_pinjam'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE buku SET judul = '$judul', tahun = '$tahun', id_penerbit = '$id_penerbit', id_pengarang = '$id_pengarang', id_katalog = '$id_katalog', qty_stok = '$qty_stok', harga_pinjam = '$harga_pinjam' WHERE isbn = '$isbn';");
			
			header("Location:index.php");
		}
	?>
</body>
</html>