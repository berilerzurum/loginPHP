<?php
$servername = "51.15.87.210";
$username = "intern";
$password = "Intern$123";
$dbname = "intern";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully"

?>