<?php 
session_start();

if(isset($_POST["Submit"])){
    if($_POST["uname"] == "abc" && $_POST["password"] == "123"){
        $_SESSION["uname"] = $_POST["uname"];
        $_SESSION["pass"] = $_POST["pass"];

        header("location: ../View/profile.php");

    }
    else{
        echo "username and password is not valid";
    }
}


?>