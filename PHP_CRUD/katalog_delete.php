<?php
include_once("connect.php");
 
$katalog = $_GET['katalog'];
 
$result = mysqli_query($mysqli, "DELETE FROM katalog WHERE id_katalog='$katalog'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:katalog.php");
?>