<?php
$no = 1;
$nama_kelas = [
    "Nama ke 1" => "Kelas 10",
    "Nama ke 2" => "Kelas 9",
    "Nama ke 3" => "Kelas 8",
    "Nama ke 4" => "Kelas 7",
    "Nama ke 5" => "Kelas 6",
    "Nama ke 6" => "Kelas 5",
    "Nama ke 7" => "Kelas 4",
    "Nama ke 8" => "Kelas 3",
    "Nama ke 9" => "Kelas 2",
    "Nama ke 10" => "Kelas 1",
];
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<div class="d-flex align-items-center justify-content-center mt-5 table-responsive-lg">
    <div class="container w-25">
        <table class="table table-striped text-center ">
            <thead class="table-success">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
            </thead>
            <tbody>
                <?php foreach ($nama_kelas as $nama => $kelas) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $nama ?></td>
                        <td><?= $kelas ?></td>
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