<?php

include ("../Model/Model.php");


if(isset($_POST["seedata"]))
{
        $dbobj = new db();
        $conobj = $dbobj->opencon();
        $fetchedData = $dbobj->fetchRow($conobj,"person");

        if( $fetchedData !==false && $fetchedData->num_rows>0)
        {
            echo("<h3>User data</h3>");
            echo("<table border='1'>");
            echo("<tr>
            <td>fname</td>
            <td>lname</td>
            <td>age</td>
            <td>salary</td>
            <td>address</td>
            </tr>");
            while($row=$fetchedData->fetch_assoc())
            {
               echo("<tr>");
                echo "<td>".$row["fname"]."</td>";
                echo "<td>".$row["lname"]."</td>";
                echo "<td>".$row["age"]."</td>";
                echo "<td>".$row["salary"]."</td>";
                echo "<td>".$row["address"]."</td>";
                echo("</tr>");
            }
            echo("</table>");
        }
else{
    echo("<br/> No user data found. </br>");
}

        $dbobj->closecon($conobj);
}




?>