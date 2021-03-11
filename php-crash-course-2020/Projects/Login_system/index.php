<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <form action="./includeFiles/signup-inc2.php" method="POST">
        <input type="text" name="first" id="" placeholder="first name"> <br>
        <input type="text" name="last" id="" placeholder="last name">   <br>
        <input type="text" name="email" id="" placeholder="e-mail">     <br>
        <input type="text" name="uid" id="" placeholder="username">     <br>
        <input type="password" name="pwd" id="" placeholder="password"> <br>
        <button type="submit" name="subMEET" value="subCreate"> Create </button>
        <button type="submit" name="subMEET" value="subRead"> Read </button>
        <button type="submit" name="subMEET" value="subUpdate"> Update </button>
        <button type="submit" name="subMEET" value="subDelete"> Delete </button>
    </form>

</body>
</html>