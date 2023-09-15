<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toko_kelontong";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id_pengguna, nama, email, status FROM pengguna";
$result = $conn->query($sql);
// var_dump($result);

$data = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $data[] = [
        "id" => $row['id_pengguna'],
        "nama" => $row['nama'],
        "email" => $row['email'],
        "status" => $row['status'],
    ];
  }
} else {
  echo "0 results";
}

header("Content-Type: application/json");

$response =  [
            'code' => 200,
            'method' => "GET",
            'status' => "success",
            'data' => $data
        ];

echo json_encode($response ,true);?>