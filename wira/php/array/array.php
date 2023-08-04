<?php
$no = 1;
$array = file_get_contents('array.json');
$data = json_decode($array, true);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<div class="d-flex align-items-center justify-content-center mt-5 table-responsive-lg">
    <div class="container w-25">
        <table class="table table-striped text-center ">
            <thead class="table-success">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal lahir</th>
                <th scope="col">nilai</th>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['nama'] ?></td>
                        <td><?= $value['kelas'] ?></td>
                        <td><?= $value['alamat'] ?></td>
                        <td><?= $value['tanggal_lahir'] ?></td>
                        <td><?= $value['nilai'] ?></td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>

</div>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>