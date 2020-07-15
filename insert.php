<?php
$servername = "192.168.1.24";
$username = "frigo";
$password = "fr1g0mdp";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connection succesful ";
}



// format
//$sql = "INSERT INTO FRIGO VALUES ('TEST','2016-12-06','2016-12-06')";

