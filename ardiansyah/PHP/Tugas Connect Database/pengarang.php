<?php
$servername = "localhost";
$database = "perpus";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database); 

$sql = "SELECT * FROM pengarang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "Pengarang : ". $row["nama_pengarang"]. " ". $row["alamat"]. "<br>";
	}
} else {
	echo "0 result";
}

$conn->close();