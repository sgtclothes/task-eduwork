<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Tabel</title>
    <style>
        .table-container {
            display: flex;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 50%;
        }

        table, th, td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="table-container">
  
    <table>
        <h3>No</h3>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$i</td></tr>";
        }
        ?>
    </table>

    
    <table>
        <h3>Nama</h3>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>Nama $i</td></tr>";
        }
        ?>
    </table>

   
    <table>
        <h3>Kelas</h3>
        <?php
        for ($i = 10; $i >= 1; $i--) {
            echo "<tr><td>Kelas $i</td></tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
