<?php
include_once("connect.php");
 
$pengarang = $_GET['pengarang'];
 
$result = mysqli_query($mysqli, "DELETE FROM pengarang WHERE id_pengarang='$pengarang'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:pengarang.php");
?>