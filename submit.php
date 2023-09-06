<html>
<body>

Welcome 
<?php 
if (isset($_POST["name"])) {
    echo $_POST["name"]; 
}?>
<br>
Your email address is: 
<?php
if (isset($_POST["email"])) {
    $_POST["email"];
}?>
<br>
<!-- <?php 
echo $_GET['a'];
?> -->
</body>
</html>