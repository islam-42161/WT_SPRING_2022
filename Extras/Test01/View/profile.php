<?php


session_start();
if(!isset($_SESSION["uname"]))
{
    header("location: login.php");
}

?>
<html>
    <head></head>
    <body>
        Hi there! <h1> <?php echo $_SESSION["uname"]; ?> </h1>
        Do you want to <a href="../Control/logout.php">Logout</a>
    </body>
</html>