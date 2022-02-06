<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Registration</title>
</head>

<body>

    <h2>Registration form</h2>
<hr>
    <form>
        <table>

            <tr>
                <td><label for="fname">First name:</label></td>
                <td><input type="text" id="fname" name="fname" ></td>
            </tr>

            <tr>
                <td><label for="lname">Last name:</label></td>
                <td><input type="text" id="lname" name="lname" ></td>
            </tr>
            <tr>
                <td><label for="fage">Age:</label></td>
                <td><input type="number" id="fage" name="age" ></td>
            </tr>
            <tr>
                <td><label for="desigID">Designation:</label></td>
                <td id="desigID">
                    <input type="radio" id="radjuniorprg" name="designation" value="Junior Programmer">
                    <label for="radjuniorprg">Junior Programmer</label>
                    <input type="radio" id="radseniorprg" name="designation" value="Senior Programmer">
                    <label for="radseniorprg">Senior Programmer</label>
                    <input type="radio" id="radprojlead" name="designation" value="Project Lead">
                    <label for="radprojlead">Project Lead</label>
                </td>
            </tr>
            <tr>
                <td><label for="preflang">Preffered Language:</label></td>
                <td id="preflang">
                    <input type="checkbox" id="checkjava" name="preflangcheck" value="JAVA">
                    <label for="checkjava">JAVA</label>
                    <input type="checkbox" id="checkphp" name="preflangcheck" value="PHP">
                    <label for="checkphp">PHP</label>
                    <input type="checkbox" id="checkcpp" name="reflangcheck" value="C++">
                    <label for="checkcpp">C++</label>
                </td>
            </tr>
            
            <tr>
                <td><label for="idemail">Email:</label></td>
                <td><input type="email" id="idemail" name="emailtf"></td>
            </tr>
            
            <tr>
                <td><label for="idpassword">Password:</label></td>
                <td><input type="password" id="idpassword" name="passwordtf"></td>
            </tr>
            
            <tr>
                <td><label for="idfileattach">Please choose a file:</label></td>
                <td><input type="file" id="idfileattach" name="fileattach"></td>
            </tr>

            

            <tr>
                <td><input type="submit" value="Submit"></td>
                <td><input type="reset" value="reset"></td>
            </tr>

        </table>
    </form>

</body>

</html>