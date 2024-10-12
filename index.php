<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <style>
        body{
            font-family: "arial";
        }
        input {
            font-size: 1.5em;
            height: 50px;
            width: 200px;
        }
    </style>
</head>
<body>
    <h3> Welcome to the DREAM PROFESSION Management System. Input your details here to register</h3>
    <form acction="core/handleforms.php" method="post">
        <p><label for="firstname"><First Name</label><input type="text" name="firstname"></p>
        <p><label for="lastname"><Last Name</label><input type="text" name="lastname"></p>
        <p><label for="age"><Age</label><input type="text" name="age"></p>
        <p><label for="gender"><Gender</label><input type="text" name="gender"></p>
        <p><label for="course"><Course</label><input type="text" name="course"></p>
        <p><label for="yeargraduated"><Year Graduated</label><input type="text" name="yeargraduated"></p>
        <p><label for="schoolname"><School Name</label><input type="text" name="schoolname"></p>
        <p><label for="religion"><Religion</label><input type="text" name="religion"></p>
            <input type="submit" name="insertNewRegisterBtn">
    </p>
    </form>
    </body>
    </html>
