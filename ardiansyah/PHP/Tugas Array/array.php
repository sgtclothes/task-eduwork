<?php
$no = 1;
$array = file_get_contents('data.json');
$data = json_decode($array, true);

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<title>Tugas Array - Mohamad Ardiansyah Rofii</title>
</head>
	<style>
		th, td {
			border: 1px solid black;
		}
	</style>
<body>
	<nav class="navbar bg-warning">
		<div class="container">
			<span class="navbar-brand mb-0 h1">Daftar Nilai</span>
		</div>
	</nav>
	<div class="d-flex align-items-center justify-content-center mt-5">
		<div class="container w-50">
			<table class="table table-striped text-center" style="border-collapse: collapse; border: 1px solid black;">
				<thead>
					<th scope="col">No.</th>
					<th scope="col">Nama</th>
					<th scope="col">Tanggal Lahir</th>
					<th scope="col">Umur</th>
					<th scope="col">Alamat</th>
					<th scope="col">Kelas</th>
					<th scope="col">Nilai</th>
					<th scope="col">Hasil</th>
				</thead>
				<tbody>
					<?php foreach ($data as $key => $value) : ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $value['nama'] ?></td>
							<td><?= $value['tanggal_lahir'] ?></td>
							<td><?= $value['umur'] ?></td>
							<td><?= $value['alamat'] ?></td>
							<td><?= $value['kelas'] ?></td>
							<td><?= $value['nilai'] ?></td>
							<td><?= $value['hasil'] ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>