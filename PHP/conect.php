<?php
$servername = "localhost";
$database = "apotek";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "SELECT * FROM pasien";
$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
    while ($row = $result -> fetch_assoc()){
        echo "Data = " . $row["id"]. " " . $row["nama_pasien"]. "<br>";
    }
} else {
    echo "0 Result";
}

$conn->close();
?>