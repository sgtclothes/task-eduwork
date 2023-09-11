<?php 
include_once("connectDB.php");

$id_penerbit =$_GET['id_penerbit'];
$result = mysqli_query($conn, "DELETE FROM penerbit WHERE id_penerbit='$id_penerbit'");

header("Location:penerbit.php");
?>