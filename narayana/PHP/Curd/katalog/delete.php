<?php
include_once("connect.php");
 
$katalog_data = $_GET['id_katalog'];
 
$result = mysqli_query($mysqli, "DELETE FROM katalog WHERE id_katalog='$katalog_data'");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>