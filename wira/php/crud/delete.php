<?php
include 'conn.php';

$isbn = $_GET['isbn'];

$delete = mysqli_query($conn, "DELETE FROM `buku` WHERE isbn='$isbn'");

header("Location: index.php");