<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas BMI - Mohamad Ardiansyah Rofii</title>
</head>

<body>
	<h1>Tugas Menghitung Nilai BMI</h1>

	<form action="kategori.php" method="post">
		<table wid>
			<tr>
				<td>Masukkan Nama Anda</td>
				<td>: <input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Berapa Tinggi Badan Anda</td>
				<td>: <input type="number" name="tinggi"></td>
			</tr>
			<tr>
				<td>Berapa Berat Badan Anda</td>
				<td>: <input type="number" name="berat"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
	<br>	
	<?php
	
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$tinggi = (float)$_POST['tinggi'];
		$berat = (float)$_POST['berat'];

		$normal = 18.5;
		$normal2 = 24.9;
		$overweight = 25;
		$overweight2 = 29.9; 


		$t = ($tinggi/100)^2;
		$hasil = $berat/$t;
		if ($hasil < $normal) {
			echo "Halo, ".$nama."."." Nilai BMI anda adalah ".$hasil.", anda termasuk (kurus)";	
		} elseif (($hasil >= $normal) && ($hasil <= $normal2 )) {
			echo "Halo, ".$nama."."." Nilai BMI anda adalah ".$hasil.", anda termasuk (sedang)";
		} else {
			echo "Halo, ".$nama."."." Nilai BMI anda adalah ".$hasil.", anda termasuk (gemuk)";
		}
		
	}

	?>
</body>

</html>