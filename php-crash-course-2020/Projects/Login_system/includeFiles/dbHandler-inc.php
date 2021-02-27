<?php
    $dbServerName = "localhost";    #default in xampp
    $dbUsername = "root";           #default in xampp
    $dbPassword = "";               #default in xampp
    $dbName = "loginsystem";         #name of database you have given in phpmyadmin

//connecting to the db
    $conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
?>  