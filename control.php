<?php

$error = '';
include "DB.php";

$email=$_POST["email"];
$password=$_POST["password"];


$users="SELECT * FROM  users WHERE email='$email' LIMIT 1";
$result = $conn->query($users);

while($row =$result->fetch_assoc()){

    $emailDB=$row["email"];
    $passwordDB=$row["password"];
}

if($emailDB == $email && $passwordDB == $password)
{
    header("Location: mainpage.html"); 
}
else if($emailDB == $email && $passwordDB != $password)
{
    echo"<br>";
    $error= "WRONG PASSWORD!!!.";
}
else
{
    echo "<br>";
    $error= "WRONG E-MAIL !!!.";
}
    echo $error;

?>