<?php
     include_once("connect.php");
     $penerbit = mysqli_query($mysqli, "SELECT penerbit.*, id_penerbit, nama_penerbit, email, telp, alamat
                                         FROM penerbit ORDER BY nama_penerbit ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Penerbit</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<style>
ul { background-color: blue; 
}
a { color: white; 
}
table { margin-left: 5px;   
        border: 3px solid blue;
}
p { margin-left: 5px;   
}
</style>

</head>
 
<body>
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="buku.php">Buku</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="pengarang.php">Pengarang</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="penerbit.php">Penerbit</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="katalog.php">Katalog</a>
  </li>
  
</ul>

<hr>
<p>
<a class='btn btn-success' href='add_penerbit.php'>Tambah Penerbit</a><br/>
</p>

 <table class="table" width='80%' border=1>
     <tr>
          <th>id_penerbit</th>
          <th>nama_penerbit</th>
          <th>email</th>
          <th>telp</th>
          <th>alamat</th>
          <th>aksi</th>
     </tr>
     <?php
      while($penerbit_data = mysqli_fetch_array($penerbit)) {
          echo "<tr>";
          echo "<td>".$penerbit_data['id_penerbit']."</td>";
          echo "<td>".$penerbit_data['nama_penerbit']."</td>";
          echo "<td>".$penerbit_data['email']."</td>";
          echo "<td>".$penerbit_data['telp']."</td>";
          echo "<td>".$penerbit_data['alamat']."</td>";
          echo "<td><a class='btn btn-primary' href='edit_penerbit.php?id_penerbit=$penerbit_data[id_penerbit]'>Edit</a> | <a class='btn btn-danger' href='delete_penerbit.php?id_penerbit=$penerbit_data[id_penerbit]'>Delete</a></td></tr>";
      }
     ?>

 </table>

</body>
</html>