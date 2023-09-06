<?php
$servername = "localhost";
$database = "perpus";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_errno());
}

$sql = "SELECT * FROM  anggota WHERE role LIKE '%USER%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       echo "Nama: " . $row["nama"]. ", " . "Nomer Telepon: ". $row["telp"]. "<br>";
    }
   } else {
       echo "0 results";
   }
$conn->close();
?>