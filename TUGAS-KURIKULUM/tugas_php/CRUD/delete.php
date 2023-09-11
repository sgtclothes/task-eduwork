<?php
include_once("connectDB.php");

$isbn = $_GET['isbn'];


$delete_detail_query = "DELETE FROM detail_peminjaman WHERE isbn='$isbn'";
if (mysqli_query($conn, $delete_detail_query)) {
    $delete_buku_query = "DELETE FROM buku WHERE isbn='$isbn'";
    if (mysqli_query($conn, $delete_buku_query)) {
        header("Location:index.php");
    } else {
        echo "Error deleting book: " . mysqli_error($conn);
    }
} else {
    echo "Error deleting book details: " . mysqli_error($conn);
}
?>
