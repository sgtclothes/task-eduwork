<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT isbn, judul, tahun, qty_stok, harga_pinjam  FROM buku ";
$result = $conn->query($sql);
// var_dump($result);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "isbn: " . $row["isbn"]. " - Judul: " . $row["judul"]. " - Tahun: " . $row["tahun"].  " - Quantity : " . $row["qty_stok"].  " - Harga: " . $row["harga_pinjam"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>