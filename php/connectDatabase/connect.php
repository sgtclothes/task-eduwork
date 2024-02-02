<?php 

    $servername = "localhost";
    $database = "library";
    $username = "root";
    $password = "sawindri123";

    // create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // check connection
    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }

    // echo "Connected successfully";
    // mysqli_close($conn);

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        // output data of each row
        while($row = $result->fetch_assoc()){
            echo "User : ".$row['name']."<br>"."Email : ".$row['email'];
        }
    }else{
        echo "0 result";
    }
    $conn->close();

?>