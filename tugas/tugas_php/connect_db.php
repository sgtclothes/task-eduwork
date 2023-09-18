<?php
$servername = "localhost";
$database = "perpus";
$username = "root";
$password = "";

// create connect
$conn = mysqli_connect($servername, $username, $password, $database);

if($conn){
    echo "connected<br>";
 }else{
    echo "not connected";
 }

 $sql = "SELECT * FROM buku ORDER BY judul";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Buku: " . $row["judul"]. " | " . $row["isbn"]. " | " . $row["tahun"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>