<?php 
include_once("connect.php");
$penerbit = mysqli_query($conn,"SELECT * FROM penerbit");
$pengarang = mysqli_query($conn,"SELECT * FROM pengarang");
$katalog =mysqli_query($conn,"SELECT * FROM katalog");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   
    <title>Add Buku</title>
</head>
<body class="card border-primary mb-3" style="max-width: 18rem;">

    <h5 class="card-header">tambahkan buku baru</h5>
    <a href="index.php" class="btn btn-outline-primary"><-Go to Home</a>
    <form action="add.php" method="post" name="form1">
        <table>
            <tr>
                <td>ISBN</td>
                <td><input type="text" name="isbn"></td>
            </tr>
            <tr>
                <td>judul</td>
                <td><input type="text" name= "judul" ></td>
            </tr>
            <tr>
                <td>tahun</td>
                <td><input type="text" name="tahun"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>
                    <select name="id_penerbit" >
                        <?php
                        while($penerbit_data = mysqli_fetch_array($penerbit)){
                            echo "<option value ='".$penerbit_data['id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";

                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td>
                    <select name="id_pengarang" >
                        <?php
                        while($pengarang_data = mysqli_fetch_array($pengarang)){
                            echo "<option value ='".$pengarang_data['id_pengarang']."'>".$pengarang_data['nama_pengarang']."</option>";

                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Katalog</td>
                <td>
                    <select name="id_katalog" >
                        <?php
                        while($katalog_data = mysqli_fetch_array($katalog)){
                            echo "<option value ='".$katalog_data['id_katalog']."'>".$katalog_data['nama']."</option>";

                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>qty stok</td>
                <td><input type="text" name= "qty_stok"></td>
            </tr>
            <tr>
                <td>Harga Pinjam</td>
                <td><input type="text" name="harga_pinjam"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Add" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST["submit"])){
        $isbn = $_POST['isbn'];
        $judul = $_POST['judul'];
        $tahun = $_POST['tahun'];
        $id_penerbit = $_POST['id_penerbit'];
        $id_pengarang = $_POST['id_pengarang'];
        $id_katalog = $_POST['id_katalog'];
        $qty_stok = $_POST['qty_stok'];
        $harga_pinjam = $_POST['harga_pinjam'];

        include_once("connect.php");

        $result =mysqli_query($conn, "INSERT INTO buku(isbn,judul,tahun,id_penerbit,id_pengarang,id_katalog,qty_stok,harga_pinjam) VALUES('$isbn','$judul','$tahun','$id_penerbit','$id_pengarang','$id_katalog','$qty_stok','$harga_pinjam');");
        header("Location:index.php");
    }
    ?>
</body>
</html>