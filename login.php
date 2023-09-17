<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <style>
        .box {
        margin-top: 200px;
        }
   </style>
</head>
<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location:dashboard.php");
}
$datapengguna = [
    'susi' => 123,
    'adit' => "adit05",
    'agus' => "agus123",
];
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (array_key_exists($_POST['username'], $datapengguna)) {
        if ($_POST['password'] == $datapengguna[$_POST['username']]) {
            // echo 'user terdaftar dan password sesuai';
            $_SESSION["username"] = $_POST["username"];
            header("Location:dashboard.php");
        } else {
            $message = 'Invalid username and password combination';
        }
    } else {
        $message =  'Invalid Username';
    }
  }
?>
<body style="background-color: green;">
    <div class="container col-md-4 text-center box" style="background-color: white;">
        <div class="row align-items-end">
            <div class="col">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="mb-3 m-4">
                        <input type="text" class="form-control" id="username" style="border-radius: 0px; background-color: lightgray;" name="username" placeholder="Username">
                    </div>
                    <div class="mb-3 m-4">
                        <input type="password"  class="form-control" id="password" style=" background-color: lightgray; border-radius: 0px;" name="password" placeholder="Password">
                    </div>
                    <div>
                        <?php 
                        if ($message != '') {
                            echo '<div class="alert alert-danger" role="alert">'.$message.'</div>';
                        }
                        ?>
                    </div>
                    <div class="mb-3 m-4">
                        <input type="submit" name="submit" class="form-control btn btn-success" value="submit" style="border-radius: 0px;">
                    </div>
                    <div class="mb-3 m-4">
                       Not Register ? <a href="#">Create An Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>