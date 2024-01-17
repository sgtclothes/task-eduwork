<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr style="background-color: blue;">
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        <?php 
            for($i=1;$i<11;$i++){
                $a = 10 - $i;
                echo "<tr >";
                echo "<td>$i</td>";
                echo "<td>Nama ke $i</td>";
                echo "<td>Kelas  $a</td>";
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>
