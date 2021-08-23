<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="baseStyle.css">


</head>
<body>

    <form action= "action.php" method="POST">
        <h1>Contact Form</h1>

        <!--BASIC INFORMATION-->
        <br>
        <span class="numeroverde">1</span> <b>Your basic info</b>


        <br><br>Name<br>
        <input type="text" name="name" class="noborder">

        <br><br>Email<br>
        <input type="email" name="email" class="noborder">

        <br><br>Password<br>
        <br><input type="password" name= "pass" class="noborder">

        <br><br>Birthday<br>
        <input type="date" name="birth" class="noborder">

        <br><br>Sex: 
        <input type="radio" name="sex" value="m">male
        <input type="radio" name="sex" value="f">female


        <!--PROFILE-->
        <br><br><br>
        <span class="numeroverde">2</span> <b>Your profile</b>

        <br><br>About you

        <br><textarea name="data" class="noborder"></textarea>

        <br><br>Role<br>
        <select class="noborder">
            <option value="1">Front-End Developer</option>
            <option value="2">Back-End Developer</option>
            <option value="3">Fullstack Developer</option>

        </select>

        <br><br>Interest<br>
        <input type="checkbox">Database
        <input type="checkbox">Design
        <input type="checkbox">Business
        <input type="checkbox">Unit Test
        <br>   
        <input type="checkbox">Cloud Development
        <input type="checkbox">Web Development

        <br><br>
        <button type="submit">Send</button>
        <button type="reset">Reset</button>


    </form>

    
</body>
</html>