<?php
$servername= "localhost";
$database="apotek";
$username="root";
$password="";

// create connection
$conn = mysqli_connect($servername, $username, $password , $database);

// check connection
if (!$conn) {
    die("connection failed: " . mysqli_conncect_error());
}

//echo "connected succesfully";
//mysqli_close($conn);

$sql = "SELECT * FROM obat";
$result = $conn->query($sql);

if ($result->num_rows >0) {
//output data of each row
 while($row = $result ->fetch_assoc()) {
 echo " obat : " . $row["id_obat"]. " " .$row["nama_obat"]. "<br>";
}
} else {
echo "0  results";
}
$conn->close();

?>