<?php

include ("../Control/registrationCheck.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MySQL nia kheladhula</title>
</head>
<body>
    <form action="ViewData.php" method="post">
    <table>
        <tr>User registration page</tr>
        <tr><td>First name: <input type="text" name="fname" id="fnameid"></td></tr>
        <tr><td>Last name: <input type="text" name="lname" id="lnameid"></td></tr>
        <tr><td>Age: <input type="number" name="age" id="ageid" min="0"></td></tr>
        <tr><td>Salary: <input type="number" min="0" name="salary" id="salaryid"></td></tr>
        <tr><td>Address: <input type="text" name="address" id="addressid"></td></tr>
        <tr>
            <td><button name="Submit" type="submit">Submit</button></td>
            <td><button type="reset">Clear Form</button></td>
            </tr>
    </table>
</form>
</body>
</html>