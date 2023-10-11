<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Pengarang</title>
	<style>
		div {
            margin: 10px 30px;
            padding: 10px 30px
        }
	</style>
</head>
<body>
	<div>
		<a href="pengarang.php" style="margin-left: 10px;">Kembali Ke Halaman Daftar Pengarang</a>
		<br/><br/>
		<form action="add_pengarang.php" method="post">
			<table width="30%" cellpadding="8">
				<tr> 
					<td>Id Pengarang</td>
					<td><input type="text" name="id_pengarang"></td>
				</tr>
				<tr> 
					<td>Nama Pengarang</td>
					<td><input type="text" name="nama_pengarang"></td>
				</tr>
				<tr> 
					<td>Email</td>
					<td><input type="email" name="email"></td>
                </tr>
				<tr> 
					<td>Telepon</td>
					<td><input type="text" name="telp"></td>
				</tr>
				<tr> 
					<td>Alamat</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr> 
					<td></td>
					<td><input type="submit" name="Submit" value="Add"></td>
				</tr>
			</table>
		</form>
	</div>
	
	<?php
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['Submit'])) {
			$id_pengarang = $_POST['id_pengarang'];
			$nama_pengarang = $_POST['nama_pengarang'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
		
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `email`, `telp`, `alamat`) VALUES ('$id_pengarang', '$nama_pengarang', '$email', '$telp', '$alamat');");
			
			header("Location:pengarang.php");
		}
	?>
</body>
</html>
