<?php
    include_once("connect.php");
    $buku = mysqli_query($mysqli, "SELECT buku.*, nama_pengarang, nama_penerbit, katalog.nama as nama_katalog FROM buku 
                                        LEFT JOIN  pengarang ON pengarang.id_pengarang = buku.id_pengarang
                                        LEFT JOIN  penerbit ON penerbit.id_penerbit = buku.id_penerbit
                                        LEFT JOIN  katalog ON katalog.id_katalog = buku.id_katalog
                                        ORDER BY judul ASC");
?>
 
<html>
<head>    
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="./style.css">
    <link rel="icon" href="./resource/Logo.svg" />
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
      <li><a href="./index.php">Buku</a></li>
      <li><a href="./penerbit/index.php">Penerbit</a></li>
      <li><a href="./pengarang/index.php">Pengarang</a></li>
      <li><a href="./katalog/index.php">Katalog</a></li>
    </ul>
</div>

<div class="add">
<button type="button" class="btn btn-success"><a href="add.php">Menambahkan buku baru</a></button>
</div>

<div class="style-table">
    <table class="table">
    <tr>
        <th>ISBN</th> 
        <th>Judul</th> 
        <th>Tahun</th> 
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Katalog</th>
        <th>Stok</th>
        <th>Harga Pinjam</th>
        <th>Aksi</th>
    </tr>
    <?php  
        while($buku_data = mysqli_fetch_array($buku)) {         
            echo "<tr>";
            echo "<td>".$buku_data['isbn']."</td>";
            echo "<td>".$buku_data['judul']."</td>";
            echo "<td>".$buku_data['tahun']."</td>";    
            echo "<td>".$buku_data['nama_pengarang']."</td>";    
            echo "<td>".$buku_data['nama_penerbit']."</td>";    
            echo "<td>".$buku_data['nama_katalog']."</td>";    
            echo "<td>".$buku_data['qty_stok']."</td>";    
            echo "<td>".$buku_data['harga_pinjam']."</td>";    
            echo "<td><a class='btn btn-primary' href='edit.php?isbn=$buku_data[isbn]'>Edit</a> | <a class='btn btn-danger' href='delete.php?isbn=$buku_data[isbn]'>Delete</a></td></tr>";        
        }
    ?>
    </table>
    </div>
</body>
</html>