<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Katalog</title>
	<style>
		div {
            margin: 10px 30px;
            padding: 10px 30px
        }
	</style>
</head>
<body>
	<div>
		<a href="katalog.php" style="margin-left: 10px;">Kembali Ke Halaman Daftar Katalog</a>
		<br/><br/>
		<form action="add_katalog.php" method="post">
			<table width="30%" cellpadding="8">
				<tr> 
					<td>Id Katalog</td>
					<td><input type="text" name="id_katalog"></td>
				</tr>
				<tr> 
					<td>Nama Katalog</td>
					<td><input type="text" name="nama"></td>
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
			$id_katalog = $_POST['id_katalog'];
			$nama = $_POST['nama'];
		
			include_once("connect.php");

			$result = mysqli_query($mysqli, "INSERT INTO `katalog` (`id_katalog`, `nama`) VALUES ('$id_katalog', '$nama');");
			
			header("Location:katalog.php");
		}
	?>
</body>
</html>
