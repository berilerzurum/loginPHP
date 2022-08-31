<?php
$servername = "";
$username = "intern";
$password = "";
$dbname = "intern";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully"

?>
