<?php
	include_once("connect.php");
	$id_pengarang = $_GET['id_pengarang'];

	$pengarang = mysqli_query($mysqli, "SELECT * FROM pengarang WHERE id_pengarang = '$id_pengarang'");

    while($pengarang_data = mysqli_fetch_array($pengarang))
    {
    	$id_pengarang = $pengarang_data['id_pengarang'];
    	$nama_pengarang = $pengarang_data['nama_pengarang'];
    	$email = $pengarang_data['email'];
    	$telp = $pengarang_data['telp'];
    	$alamat = $pengarang_data['alamat'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Pengarang</title>
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
		<br/><br>
		<form action="edit_pengarang.php?id_pengarang=<?php echo $id_pengarang; ?>" method="post">
			<table width="30%" cellpadding="8">
				<tr> 
					<td>Id Penerbit</td>
					<td style="font-size: 11pt;" name="id_pengarang"><?php echo $id_pengarang; ?> </td>
				</tr>
				<tr> 
					<td>Nama Penerbit</td>
					<td><input type="text" name="nama_pengarang" value="<?php echo $nama_pengarang; ?>"></td>
				</tr>
				<tr> 
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
				</tr>
				<tr> 
					<td>Telepon</td>
					<td><input type="text" name="telp" value="<?php echo $telp; ?>"></td>
				</tr>
				<tr> 
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
				</tr>
				<tr> 
					<td></td>
					<td><input type="submit" name="update" value="Update"></td>
				</tr>
			</table>
		</form>
	</div>
	
	<?php
		// Check If form submitted, insert form data into users table.
		if(isset($_POST['update'])) {

			$id_pengarang = $_GET['id_pengarang'];
			$nama_pengarang = $_POST['nama_pengarang'];
			$email = $_POST['email'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE pengarang SET nama_pengarang = '$nama_pengarang', email = '$email', telp = '$telp', alamat = '$alamat' WHERE id_pengarang = '$id_pengarang';");
			
			header("Location:pengarang.php");
		}
	?>
</body>
</html>
