<?php
include ("../Model/Model.php");
$error="";

if(isset($_POST["Submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $age = $_POST["age"];
    $salary = $_POST["salary"];
    $address = $_POST["address"];

    if(empty($fname) || empty($lname) || empty($age) || empty($salary) || empty($address)){
        $error = "<br/>Fill up every filed properly to proceed.";
        echo($error);
    }

    else{
        $dbobj = new db();
        $conobj = $dbobj -> opencon();
        $dbobj -> insertRow($fname,$lname,$age,$salary,$address,"person",$conobj);
        $dbobj -> closecon($conobj);
        header("Location: ViewData.php");
    }

}

?>