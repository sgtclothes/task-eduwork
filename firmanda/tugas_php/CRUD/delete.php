<?php 
include_once ("connect.php");

$result = mysqli_query($conn, "DELETE FROM buku WHERE isbn='$isbn'");

header("Location:index.php");
?>