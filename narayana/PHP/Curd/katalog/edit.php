<html>
<head>
	<title>Edit Katalog</title>
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
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="edit.php?id_katalog=<?php echo $id_katalog; ?>" method="post">
		<table width="25%" border="0">
			<tr> 
				<td>ID Katalog</td>
				<td style="font-size: 11pt;"><?php echo $id_katalog; ?> </td>
			</tr>
			<tr> 
				<td>Nama Katalog</td>
				<td><input type="text" name="nama" value="<?php echo $nama_katalog; ?>"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	
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