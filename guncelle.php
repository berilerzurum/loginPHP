<?php

include "DB.php";

        $email = $_POST['email'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpass'];
        $confirmnewpassword = $_POST['confirmpass'];

        $users="SELECT * FROM  users WHERE email='$email' LIMIT 1";
        $result = $conn->query($users);

        while($row =$result->fetch_assoc()){

            $emailDB=$row["email"];
            $passwordDB=$row["password"];
        }

        if(!$result||$emailDB!=$email) 
        {
            echo "<br>";
        echo "The email you entered does not exist";
        }
        else if($password!= $passwordDB)
        {
            echo "<br>";
        echo "You entered an incorrect password";
        }
        else if($newpassword==$confirmnewpassword&&$newpassword!=$passwordDB)
        {
            $confirm="UPDATE users SET password='$newpassword' WHERE  email='$email' LIMIT 1";
            $confirm=$conn->query($confirm);
            echo "<br>";
            echo "Congratulations You have successfully changed your password";
        }
       else if($newpassword!=$confirmnewpassword)
        {
            echo "<br>";
            echo "Passwords do not match";
        }

        else
        {
            echo "<br>";
            echo "You can not enter password that same with old password.";
        }
      ?>