<?php
    include_once("connect.php");

    // Check if 'merek' parameter is set in the URL
    if(isset($_GET['merek'])) {
        $merek = $_GET['merek'];

        // Retrieve data for the specified 'merek'
        $obat = mysqli_query($mysqli, "SELECT * FROM obat WHERE merek_obat='$merek'");

        // Check if data is found
        if(mysqli_num_rows($obat) > 0) {
            // Fetch data from the query result
            $obat_data = mysqli_fetch_assoc($obat);
            $harga = $obat_data['harga'];
            $merek = $obat_data['merek_obat'];
        } else {
            // Redirect to homepage if 'merek' is not found
            header("Location: index.php");
            exit();
        }
    } else {
        // Redirect to homepage if 'merek' parameter is not set
        header("Location: index.php");
        exit();
    }
?>

<html>
<head>
    <title>Edit obat</title>
</head>
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="edit.php?merek=<?php echo htmlspecialchars($merek); ?>" method="post">
        <table width="25%" border="0">
            <tr> 
                <td>merek</td>
                <td style="font-size: 11pt;"><?php echo htmlspecialchars($merek); ?> </td>
            </tr>
            <tr> 
                <td>harga</td>
                <td><input type="text" name="harga" value="<?php echo htmlspecialchars($harga); ?>"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    
    <?php
        // Check if the form is submitted
        if(isset($_POST['update'])) {
            // Get updated harga from the form
            $harga = $_POST['harga'];

            // Update the record in the database
            $result = mysqli_query($mysqli, "UPDATE obat SET harga = '$harga' WHERE merek_obat = '$merek'");
            
            // Redirect to the homepage after updating
            header("Location: index.php");
            exit();
        }
    ?>
</body>
</html>
