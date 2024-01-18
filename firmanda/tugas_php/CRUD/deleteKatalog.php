<?php
include_once ("connect.php");
$id_katalog = $_GET['id_katalog'];
$result =  mysqli_query($conn,"DELETE FROM katalog WHERE id_katalog = '$id_katalog'");
header("Location:katalog.php");
?>