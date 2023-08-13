<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas Function - Mohamad Ardiansyah Rofii</title>
</head>

<body>
	<h1>Tugas Function - Menghitung Rumus Bangun Ruang</h1><br>
	<form action="" method="post">
		<table>
			<tr>
				<td>
					<h3>1. Function Menghitung Volume Kubus</h3>
				</td>
			</tr>
			<tr>
				<td>Berapa ukuran rusuknya</td>
				<td>: <input type="number" name="rusuk"></td>
			</tr>
			<tr>
				<td><input type="submit" name="kubus" value="Hitung"></td>
			</tr>

			<tr>
				<td>
					<h3>2. Function Menghitung Volume Balok</h3>
				</td>
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
				<td>Berapa tingginya</td>
				<td>: <input type="number" name="tinggi"></td>
			</tr>
			<tr>
				<td><input type="submit" name="balok" value="Hitung"></td>
			</tr>

			<tr>
				<td>
					<h3>3. Function Menghitung Volume Prisma</h3>
				</td>
			</tr>
			<tr>
				<td>Berapa luas alasnya</td>
				<td>: <input type="number" name="lalas"></td>
			</tr>
			<tr>
				<td>Berapa tingginya</td>
				<td>: <input type="number" name="tinggi1"></td>
			</tr>
			<tr>
				<td><input type="submit" name="prisma" value="Hitung"></td>
			</tr>

			<tr>
				<td>
					<h3>4. Function Menghitung Volume Limas</h3>
				</td>
			</tr>
			<tr>
				<td>Berapa luas alasnya</td>
				<td>: <input type="number" name="lalas1"></td>
			</tr>
			<tr>
				<td>Berapa tingginya</td>
				<td>: <input type="number" name="tinggi2"></td>
			</tr>
			<tr>
				<td><input type="submit" name="limas" value="Hitung"></td>
			</tr>

			<tr>
				<td>
					<h3>5. Function Menghitung Volume Tabung</h3>
				</td>
			</tr>
			<tr>
				<td>Berapa ukuran jari-jarinya</td>
				<td>: <input type="number" name="jari"></td>
			</tr>
			<tr>
				<td>Berapa tingginya</td>
				<td>: <input type="number" name="tinggi3"></td>
			</tr>
			<tr>
				<td><input type="submit" name="tabung" value="Hitung"></td>
			</tr>

		</table>
	</form>
	<br>
</body>
<?php

if (isset($_POST['kubus'])) {
	$rusuk = $_POST['rusuk'];
	function volumekubus($rusuk)
	{
		return $rusuk * $rusuk * $rusuk;
	}
	echo "Volume kubus adalah " . volumekubus($rusuk);
} elseif (isset($_POST['balok'])) {
	# code...
	$panjang = $_POST['panjang'];
	$lebar = $_POST['lebar'];
	$tinggi = $_POST['tinggi'];
	function volumebalok($panjang, $lebar, $tinggi)
	{
		return $panjang * $lebar * $tinggi;
	}
	echo "Volume balok adalah " . volumebalok($panjang, $lebar, $tinggi);
} elseif (isset($_POST['prisma'])) {
	# code...
	$lalas = $_POST['lalas'];
	$tinggi1 = $_POST['tinggi1'];
	function volumeprisma($lalas, $tinggi1)
	{

		return $lalas * $tinggi1;
	}
	echo "Volume prisma adalah " . volumeprisma($lalas, $tinggi1);
} elseif (isset($_POST['limas'])) {
	# code...
	$lalas1 = $_POST['lalas1'];
	$tinggi2 = $_POST['tinggi2'];
	function volumelimas($lalas1, $tinggi2)
	{

		return 1/3 * $lalas1 * $tinggi2;
	}
	echo "Volume limas adalah " . volumelimas($lalas1, $tinggi2);
} elseif (isset($_POST['tabung'])) {
	# code...
	$jari = $_POST['jari'];
	$tinggi3 = $_POST['tinggi3'];
	function volumetabung($jari, $tinggi3)
	{

		return 3.14 * $jari * $jari * $tinggi3;
	}
	echo "Volume tabung adalah " . volumetabung($jari, $tinggi3);
}



?>

</html>