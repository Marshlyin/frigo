<?php
$servername = "192.168.1.24";
$username = "frigo";
$password = "fr1g0mdp";
$dbname = "frigo";
$id= $_GET['id'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "DELETE FROM FRIGO WHERE id = " .$id." ;" ;
    $result = $conn->query($sql);
}
header("Location:index.php");