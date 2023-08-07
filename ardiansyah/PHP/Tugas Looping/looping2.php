<?php

$no = 1;
$nama = [
	"Nama ke 1" => "Kelas 10",
	"Nama ke 2" => "Kelas 9",
	"Nama ke 3" => "Kelas 8",
	"Nama ke 4" => "Kelas 7",
	"Nama ke 5" => "Kelas 6",
	"Nama ke 6" => "Kelas 5",
	"Nama ke 7" => "Kelas 4",
	"Nama ke 8" => "Kelas 3",
	"Nama ke 9" => "Kelas 2",
	"Nama ke 10" => "Kelas 1"
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas Looping2 - Mohamad Ardiansyah Rofii</title>
	<style>
		table {
			border-collapse: collapse;
		}
		
		td, th {
			border: 2px solid black;
			text-align: center;
			padding: 15px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		th {
			background-color: #02bff0;
		}
	</style>
</head>

<body>
	<h1>Tugas Looping2</h1>

	<table>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Kelas</th>
		</tr>
			<?php foreach ($nama as $nama => $kelas) : ?>
				<tr>
					<td ><?= $no++ ?></td>
					<td><?= $nama ?></td>
					<td><?= $kelas ?></td>
				</tr>
			<?php endforeach ?>
	</table>
</body>

</html>