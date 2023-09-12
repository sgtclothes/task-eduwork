<?php
    include_once("connect.php");
    $pengarang = mysqli_query($mysqli, "SELECT *, id_pengarang FROM pengarang ORDER BY id_pengarang ASC");
?>
 
<html>
<head>    
    <title>Admin Page</title>
    <link href="./style.css">
    <link rel="icon" href="./resource/Logo.svg" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<style>
  .logo-text {
    margin-top: 5px;
  }
  .logo-text a {
    padding-top: 15px;
    color: white;
    font-size: 18px;
    font-weight: bold;
    text-decoration: none;
  }
  .top-navbar {
    display: flex;
    background-color:	#0096FF;
    justify-content: space-around;
  }
  .top-navbar ul {
    display: flex;
    width: 30%;
    list-style: none;
    justify-content: space-between;
  }
  .top-navbar ul li a {
    display: flex;
    margin-top: 12px;
    color: white;
    text-decoration: none;
    font-size: 18px;
  }
  .add {
    width:20%;
    margin:0 auto;
    font-size: 14px;
    margin: auto;
    padding: 10px;
  }
  .add a {
    color: white;
    text-decoration: none;
  }
  .style-table {
    margin: auto;
    width: 85%;
    padding: 10px;
    border: 3px solid #ccc;
	  border-radius: 5px;
    background: white;
  }
</style>

<body>
<div class="top-navbar">
<div>
<img src="./resource/logo-1.svg" height="50px" alt="">
</div>
    <ul>
      <li><a href="./curd/index.php">Buku</a></li>
      <li><a href="./curd/penerbit/index.php">Penerbit</a></li>
      <li><a href="./index.php">Pengarang</a></li>
      <li><a href="./curd/katalog/index.php">Katalog</a></li>
    </ul>
</div>

<div class="add">
<button type="button" class="btn btn-success"><a href="add.php">Menambahkan pengarang baru</a></button>
</div>
 
<div class="style-table">
    <table class="table">
 
    <tr>
        <th>ID Pengarang</th> 
        <th>Nama</th> 
        <th>Email</th> 
        <th>Nomer Telepon</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php  
        while($pengarang_data = mysqli_fetch_array($pengarang)) {         
            echo "<tr>";
            echo "<td>".$pengarang_data['id_pengarang']."</td>";
            echo "<td>".$pengarang_data['nama_pengarang']."</td>";
            echo "<td>".$pengarang_data['email']."</td>";
            echo "<td>".$pengarang_data['telp']."</td>";    
            echo "<td>".$pengarang_data['alamat']."</td>";      
            echo "<td><a class='btn btn-primary' href='edit.php?id_pengarang=$pengarang_data[id_pengarang]'>Edit</a> | <a class='btn btn-danger' href='delete.php?id_pengarang=$pengarang_data[id_pengarang]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
</body>
</html>