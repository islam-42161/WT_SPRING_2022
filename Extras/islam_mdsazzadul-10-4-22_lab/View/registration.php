<!DOCTYPE html>
<html lang="en">
<head>
    <title>Check input field validation using JS</title>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css" />
</head>
<body>
<div>
        
    
    <div class="formbox">
        <form action="" method="post">
        <div class="inputsection">
                <label for="firstname">Firstname:</label>
                <input type="text" name="firstname" id="firstnameid" onkeyup="validateData()">
                <p id="firstname_error"/>
            </div>
            <div class="inputsection">
                <label for="lastname">Lastname:</label>
                <input type="text" name="lastname" id="lastnameid" onkeyup="validateData()">
                <p id="lastname_error"/>
            </div>
            <div class="inputsection">
                <label for="age">Age:</label>
                <input type="number" min="0" name="age" id="ageid" onkeyup="validateData()">
                <p id="age_error"/>
            </div>
            <div class="inputsection">
                <label for="salary">Salary:</label>
                <input type="number" min="0" name="salary" id="salaryid" onkeyup="validateData()">
                <p id="salary_error"/>
            </div>
            <div class="inputsection">
                <label for="address">Address:</label>
                <input type="text" name="address" id="addressid" onkeyup="validateData()">
                <p id="address_error"/>
            </div>
            <button class="submitbutton" type="submit">Submit info</button>
        </form>
        </div>

    
</div>
<script src="../js/registrationValidation.js">

</script>
</body>
</html>