<?php
include ('/xampp/htdocs/task-eduwork/toko_kelontong/koneksi.php');
if (isset($_GET['id_pengguna'])){
    $id_pengguna = $_GET['id_pengguna'];
    $sql= "UPDATE pengguna SET pengguna.status='0' WHERE id_pengguna ='$id_pengguna'";
    $conn->query($sql);
    header("Location:index.php");
} 
?>