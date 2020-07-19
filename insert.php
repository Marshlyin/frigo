<?php
$servername = "192.168.1.24";
$username = "frigo";
$password = "fr1g0mdp";
$dbname = "frigo";
$food = $_POST['food'];
$exp_date = $_POST['exp_date'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "INSERT INTO FRIGO (food, expiration_date) VALUES ('".$food."', '".$exp_date."');" ;
    $result = $conn->query($sql);
}
header("Location:index.php");







// format
//$sql = "INSERT INTO FRIGO VALUES ('TEST','2016-12-06','2016-12-06')";

