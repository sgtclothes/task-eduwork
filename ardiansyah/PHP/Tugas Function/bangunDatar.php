<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas Function - Mohamad Ardiansyah Rofii</title>
</head>

<body>
	<h1>Tugas Function - Menghitung Rumus Bangun Datar</h1><br>
	<form action="" method="post">
		<table>
			<tr>
				<td><h3>1. Function Menghitung Luas Persegi</h3></td>
			</tr>
			<tr>
				<td>Berapa sisi persegi</td>
				<td>: <input type="number" name="sisi"></td>
			</tr>
			<tr>
				<td><input type="submit" name="persegi" value="Hitung"></td>
			</tr>

			<tr>
				<td><h3>2. Function Menghitung Luas Persegi Panjang</h3></td>
			</tr>
			<tr>
				<td>Berapa panjangnya</td>
				<td>: <input type="number" name="panjang"></td>
			</tr>
			<tr>
				<td>Berapa lebarnya</td>
				<td>: <input type="number" name="lebar"></td>
			</tr>
			<tr>
				<td><input type="submit" name="persegipanjang" value="Hitung"></td>
			</tr>

			<tr>
				<td><h3>3. Function Menghitung Luas Segitiga</h3></td>
			</tr>
			<tr>
				<td>Berapa alasnya</td>
				<td>: <input type="number" name="alas"></td>
			</tr>
			<tr>
				<td>Berapa tingginya</td>
				<td>: <input type="number" name="tinggi"></td>
			</tr>
			<tr>
				<td><input type="submit" name="segitiga" value="Hitung"></td>
			</tr>

			<tr>
				<td><h3>4. Function Menghitung Luas Jajar Genjang</h3></td>
			</tr>
			<tr>
				<td>Berapa alasnya</td>
				<td>: <input type="number" name="alas1"></td>
			</tr>
			<tr>
				<td>Berapa tingginya</td>
				<td>: <input type="number" name="tinggi1"></td>
			</tr>
			<tr>
				<td><input type="submit" name="jajargenjang" value="Hitung"></td>
			</tr>

			<tr>
				<td><h3>5. Function Menghitung Luas Trapesium</h3></td>
			</tr>
			<tr>
				<td>Berapa panjang sisi a</td>
				<td>: <input type="number" name="sisia"></td>
			</tr>
			<tr>
				<td>Berapa panjang sisi b</td>
				<td>: <input type="number" name="sisib"></td>
			</tr>
			<tr>
				<td>Berapa tingginya</td>
				<td>: <input type="number" name="tinggi2"></td>
			</tr>
			<tr>
				<td><input type="submit" name="trapesium" value="Hitung"></td>
			</tr>

		</table>
	</form>
	<br>
</body>
<?php

if (isset($_POST['persegi'])) {
	$sisi = $_POST['sisi'];
	function luaspersegi($sisi)
	{
		return $sisi * $sisi;
	}
	echo "Luas persegi adalah " . luaspersegi($sisi);
} elseif (isset($_POST['persegipanjang'])) {
	# code...
	$panjang = $_POST['panjang'];
	$lebar = $_POST['lebar'];
	function luaspersegipanjang($panjang, $lebar)
	{
		return $panjang * $lebar;
	}
	echo "Luas persegi panjang adalah " . luaspersegipanjang($panjang, $lebar);
} elseif (isset($_POST['segitiga'])) {
	# code...
	$alas = $_POST['alas'];
	$tinggi = $_POST['tinggi'];
	function luassegitiga($alas, $tinggi)
	{
		
		return 0.5 * $alas * $tinggi;
	}
	echo "Luas segitiga adalah " . luassegitiga($alas, $tinggi);
} elseif (isset($_POST['jajargenjang'])) {
	# code...
	$alas1 = $_POST['alas1'];
	$tinggi1 = $_POST['tinggi1'];
	function luasjajargenjang($alas1, $tinggi1)
	{
		
		return $alas1 * $tinggi1;
	}
	echo "Luas jajar genjang adalah " . luasjajargenjang($alas1, $tinggi1);
} elseif (isset($_POST['trapesium'])) {
	# code...
	$sisia = $_POST['sisia'];
	$sisib = $_POST['sisib'];
	$tinggi2 = $_POST['tinggi2'];
	function luastrapesium($sisia, $sisib, $tinggi2)
	{
		
		return 0.5 * ($sisia * $sisib) * $tinggi2;
	}
	echo "Luas trapesium adalah " . luastrapesium($sisia, $sisib, $tinggi2);
}



?>

</html>