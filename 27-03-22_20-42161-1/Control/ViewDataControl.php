<?php

include ("../Model/Model.php");


if(isset($_POST["seedata"]))
{
    echo "button clicked!";
        $dbobj = new db();
        $conobj = $dbobj -> opencon();
        $fetchedData = $dbobj -> fetchRow("person",$conobj);

        if($fetchedData -> num_rows>0){
            while($row=$fetchedData->fetch_assoc()){
               
                echo $row["fname"]."</br>";
                echo $row["lname"]."</br>";
                echo $row["age"]."</br>";
                echo $row["salary"]."</br>";
                echo $row["address"]."</br>";
            }
        }
else{
    echo("<br/> No user data found. </br>");
}

        $dbobj -> closecon($conobj);
}


?>