<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: auto;
            margin: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #01bfee;
            text-align: center;
        }
        .zebra-odd {
            background-color: lightgray;
        }
        .zebra-even {
            background-color: white;
        }
    </style>
    <title>PHP Table</title>
</head>

<body>

    <?php
    echo "<table>";
    echo "<tr><th>No.</th><th>Nama</th><th>Kelas</th></tr>";

    for ($i = 1; $i <= 10; $i++) {
        $zebra_class = ($i % 2 == 0) ? "zebra-even" : "zebra-odd";

        echo "<tr class='$zebra_class'>";
        echo "<td>$i</td>";

        $nama = "Nama ke " . $i;
        echo "<td>$nama</td>";

        $kelas = "Kelas " . (11 - $i);
        echo "<td>$kelas</td>";

        echo "</tr>";
    }

    echo "</table>";
    ?>

</body>
</html>
