<?php 
    // include_once("connect.php");
    // $id_pengarang = $_GET['id_pengarang'];
    // echo "terhapus";
    // $result = mysqli_query($conn,"DELETE FROM pengarang WHERE id_pengarang = '$id_pengarang'");
    // header("Location:pengarang.php");
?>
<?php
include_once ("connect.php");
$id_pengarang = $_GET['id_pengarang'];
// echo "terhapus";
$result =  mysqli_query($conn,"DELETE FROM pengarang WHERE id_pengarang = '$id_pengarang'");
header("Location:pengarang.php");
?>