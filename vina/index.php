<?php
    include_once("connect.php");
    $obat = mysqli_query($mysqli, "SELECT obat.*, obat.nama_obat AS nama_id
    FROM obat
    LEFT JOIN merek ON merek.nama_merek = obat.merek_obat
    ORDER BY obat.nama_obat ASC");

?>
<html>
<head>    
    <title>Homepage</title>    
</head>
<body>

  <!-- Tautan Edit dengan parameter id_obat -->
<td><a class='btn btn-primary' href='edit.php?id_obat=".$obat_data['id_obat']."'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_obat=".$obat_data['id_obat']."'>Delete</a></td></tr>


<a href="add.php">Add New obat</a><br/><br/>
 
<table class="table" width='80%' border=1>
    <tr>
        <th>id_obat</th> 
        <th>merek</th> 
    </tr>
    <?php  
        while($obat_data = mysqli_fetch_array($obat)) {         
            echo "<tr>";
            echo "<td>".$obat_data['id_obat']."</td>";
            echo "<td>".$obat_data['nama_id']."</td>";  
            
            // Tombol hanya muncul jika ada data yang bisa diklik
            if ($obat_data['id_obat']) {
                echo "<td><a class='btn btn-primary' href='edit.php?id_obat=".$obat_data['id_obat']."'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_obat=".$obat_data['id_obat']."'>Delete</a></td>";
            } else {
                echo "<td>Tidak ada aksi yang tersedia</td>";
            }
            
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>
