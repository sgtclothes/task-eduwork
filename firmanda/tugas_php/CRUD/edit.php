<?php 
include_once ("connect.php");
$isbn = $_GET['isbn'];
$buku = mysqli_query($conn,"SELECT * FROM 'buku' WHERE isbn = '$isbn'");
$penerbit = mysqli_query($conn, "SELECT * FROM 'penerbit'");
$pengarang = mysqli_query($conn, "SELECT * FROM 'pengarang' ");
$katalog = mysqli_query($conn,"SELECT * FROM 'katalog'");

while ($buku_data = mysqli_fetch_array($buku)){
    $judul = $buku_data['judul'];
    $isbn = $buku_data['isbn'];
    $tahun =$buku_data['tahun'];
    $id_penerbit = $buku_data['id_penerbit'];
    $id_pengarang = $buku_data['$id_pengarang'];
    $id_katalog = $buku_data['$id_katalog'];
    $qty_stok = $buku_data['$qty_stok'];
    $harga_pinjam = $buku_data['$harga_pinjam'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <a href="index.php">Go Home</a>

    <form action="edit.php?isbn<?php echo $isbn; ?>" method="post">
        <table border="1">
            <tr>
                <td>ISBN</td>
                <td style="font-size: 11pt;"><?php $isbn; ?></td>
            </tr>
            <tr>
                <td>judul</td>
                <td><input type="text" name="judul" value="<?php echo $judul?>"></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td><input type="text" name="tahun" value="<?php echo $tahun; ?>"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>
                    <select name="id_penerbit">
                        <?php
                        while($penerbit_data = mysqli_fetch_array($penerbit)){
                            echo "<option".($penerbit_data['$id_penerbit'] == $id_penerbit ? 'selected' : ''). "value='".$penerbit_data['$id_penerbit']."'>".$penerbit_data['nama_penerbit']."</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>