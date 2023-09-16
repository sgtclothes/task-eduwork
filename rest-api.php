<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toko_kelontong";

$method = $_SERVER['REQUEST_METHOD'];
header("Content-Type: application/json");
$data = [];
$response = [];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  if ($method and $method == "GET") {
    $sql = "SELECT id_pengguna, nama, email, status FROM pengguna WHERE status=1";
    $sql = 1;
    if (isset($_GET['sql'])) {
      $sql = $_GET['sql'];
  } else {
      $sql = "SELECT id_pengguna, nama, email, status FROM pengguna WHERE status=1";
  }  
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $d = [];
        foreach ($row as $key => $value) {
          $d[$key] = $value;
        }

        $data[] = $d;
      }
    } else {
      echo "0 results";
    }

    header("Content-Type: application/json");

    $response =  [
                'message' => 'successfully Get Data',
                'code' => 200,
                'method' => "GET",
                'status' => "success",
                'data' => $data
            ];
  } elseif ($method and $method == "POST") {
    $post_data = json_decode(file_get_contents('php://input'),true );
    $nama = $post_data['nama'];
    $email = $post_data['email'];
    // var_dump($post_data);
    $sql = "INSERT INTO pengguna (nama, email, status)
    VALUES ('$nama', '$email' , 1)";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        $response =  [
          'message' => 'successfully Post Data',
          'code' => 200,
          'method' => "POST",
          'status' => "success",
          'data' => [
              "id" => $last_id,
              "nama" => $nama,
              "email" => $email,
              "status" => 1,
            ]
      ];
    } else {
        $response =  [
          'message' => "Error: " . $sql . "<br>" . $conn->error,
          'code' => 500,
          'method' => "GET",
          'status' => "failed",
      ];
    }
  } elseif ($method and $method == "PUT") {
    $put_data = json_decode(file_get_contents('php://input'),true );
    $id = $put_data['id_pengguna'];
    $nama = $put_data['nama'];
    $email = $put_data['email'];
    $status = $put_data['status'];
    // var_dump($post_data);
    $sql = "UPDATE pengguna SET nama='$nama', email='$email', status='$status' WHERE id_pengguna='$id'";
    if ($conn->query($sql) === TRUE) {
        // $last_id = $conn->insert_id;
        $response =  [
          'message' => 'successfully Put Data',
          'code' => 200,
          'method' => "PUT",
          'status' => "success",
          'data' => [
              "id" => $id,
              "nama" => $nama,
              "email" => $email,
              "status" => $status,
            ]
      ];
    } else {
        $response =  [
          'message' => "Error: " . $sql . "<br>" . $conn->error,
          'code' => 500,
          'method' => "PUT",
          'status' => "failed",
      ];
    }
  } elseif ($method and $method == "DELETE") {
    $del_data = json_decode(file_get_contents('php://input'),true );
    $id = $del_data['id_pengguna'];
    // var_dump($post_data);
    $sql = "DELETE FROM pengguna WHERE id_pengguna='$id'";
    if ($conn->query($sql) === TRUE) {
        // $last_id = $conn->insert_id;
        $response =  [
          'message' => 'successfully Delete Data',
          'code' => 200,
          'method' => "DELETE",
          'status' => "success",
          'data' => [
              "id" => $id,
            ]
      ];
    } else {
        $response =  [
          'message' => "Error: " . $sql . "<br>" . $conn->error,
          'code' => 500,
          'method' => "DELETE",
          'status' => "failed",
      ];
    }
  }


echo json_encode($response ,true);
?>