<?php
include_once("connect.php");
 
$isbn = $_GET['id_obat'];
 
$result = mysqli_query($mysqli, "DELETE FROM obat WHERE id_obat='$id_obat'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>