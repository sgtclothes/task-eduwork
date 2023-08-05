<?php

include "conn.php";
$no = 1;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Looping 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<div class="d-flex align-items-center justify-content-center mt-5 table-responsive-lg">
    <div class="container w-25">
        <table class="table table-striped text-center ">
            <thead class="table-success">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM anggota";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['username']; ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</div>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>