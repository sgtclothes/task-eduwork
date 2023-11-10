<?php
include_once("connect.php");
 
$penerbit = $_GET['penerbit'];
 
$result = mysqli_query($mysqli, "DELETE FROM penerbit WHERE id_penerbit='$penerbit'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:penerbit.php");
?>