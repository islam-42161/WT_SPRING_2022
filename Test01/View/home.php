<?php

session_start();

echo "Your username is: ".$_SESSION["uname"];
echo "Your password is: ".$_SESSION['password'];

?>


<html>
    <head></head>
    <body>
        <h1> Home </h1>
        <a href="registration1.php">Registration</a><br/>
        <a href="login.php">Login</a>
    </body>
</html>