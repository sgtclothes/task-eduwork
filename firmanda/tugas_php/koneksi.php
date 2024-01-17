<?php
$servername = "localhost";
$database = "perpus";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername,$username,$password,$database);
// Check connection
if(!$conn){
    die("koneksi gagal: ".mysqli_connect_error());
}
// echo "koneksi berhasil";
// mysqli_close($conn);

$sql = "SELECT * FROM buku";
$result = $conn ->query($sql);

if($result->num_rows >0){
    while($row = $result->fetch_assoc()){
        echo "buku : ".$row["isbn"]." ". $row["judul"]. "<br>";
    }
}
else{
    echo "0 result";
}
$conn->close();
?>