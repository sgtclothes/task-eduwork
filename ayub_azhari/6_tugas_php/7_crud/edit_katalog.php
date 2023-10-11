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
		<br/><br>
		<form action="edit_katalog.php?id_katalog=<?php echo $id_katalog; ?>" method="post">
			<table width="30%" cellpadding="8">
				<tr> 
					<td>Id Katalog</td>
					<td style="font-size: 11pt;" name="id_katalog"><?php echo $id_katalog; ?> </td>
				</tr>
				<tr> 
					<td>Nama Penerbit</td>
					<td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
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

			$id_katalog = $_GET['id_katalog'];
			$nama = $_POST['nama'];
			
			include_once("connect.php");

			$result = mysqli_query($mysqli, "UPDATE katalog SET nama = '$nama' WHERE id_katalog = '$id_katalog';");
			
			header("Location:katalog.php");
		}
	?>
</body>
</html>
