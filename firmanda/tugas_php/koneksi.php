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
echo "query ke 1<br>";
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

echo "<br>query ke 2 <br>";
$sql2 = "SELECT * FROM anggota";
$result2 = $conn ->query($sql2);

if($result2->num_rows >0){
    while($row = $result2->fetch_assoc()){
        echo "anggota : ".$row["id_anggota"]." ". $row["nama"]. "<br>";
    }
}
else{
    echo "0 result";
}
$conn->close();
?>