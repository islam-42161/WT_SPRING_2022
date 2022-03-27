<?php

class db{

function opencon()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";


    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn -> connect_error){
        echo("<br/>Database connection error: $conn->connect_error <br/>");
    }

    return $conn;


}

function insertRow($fname,$lname,$age,$salary,$address,$tablename,$conn){

    $insert_command = "INSERT INTO $tablename (fname,lname,age,salary,address) VALUES ('$fname','$lname','$age','$salary','$address')";
    if ($conn -> query($insert_command) === TRUE) {
        echo(
            "<br/>Data insertion completed!<br/>"
        );
    }
}

function fetchRow($tablename,$conn){
    $sql_command = "SELECT * FROM $tablename";
    return $conn->query($sql_command);
}
function closecon($conn)
{
    $conn->close();
}

}

?>