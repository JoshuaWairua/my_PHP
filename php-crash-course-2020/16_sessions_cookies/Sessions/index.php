<?php
    // starting a session to make the session variable accessible to other webpages of the website
    session_start() 
?>      <!--Mostly this session start function is in a separate header.php file that is included/required for each webpage-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HOME </title>
</head>
<body>
    <ul>
        <li> <a href="./index.php"> HOME </a> </li>
        <li> <a href="./contact.php"> CONTACT </a> </li>
    </ul>

    <?php
        // creating a session variable
        $_SESSION['username'] = "josh789a";
        echo $_SESSION['username'] . "<br>";
        if (!isset($_SESSION['username'])) {
            echo "You are not logged in!";
        } else {
            echo  "Welcome " . $_SESSION['username'];
        }
    ?>
</body>
</html>