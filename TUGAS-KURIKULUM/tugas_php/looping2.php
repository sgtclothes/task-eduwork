<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping-2</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $nama = "Nama ke " . $i;
            $kelas = "Kelas " . (11 - $i);
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $nama . "</td>";
            echo "<td>" . $kelas . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>