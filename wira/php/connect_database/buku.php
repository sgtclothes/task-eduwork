<?php

include "conn.php";

$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Buku: " . $row["isbn"] . " " . $row["judul"] . "<br>";
    }
} else {
    echo "0 result";
}
