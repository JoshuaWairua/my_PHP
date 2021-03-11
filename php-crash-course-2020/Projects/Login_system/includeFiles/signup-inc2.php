<?php
include_once "./dbHandler-inc.php";

#the php function mysqli_real_escape_string() escapes the input characters so that the db can read it as plain text but not as code, hence preventing sql injection
$first = mysqli_real_escape_string($conn, $_POST["first"]);     
$last = mysqli_real_escape_string($conn, $_POST["last"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$uid = mysqli_real_escape_string($conn, $_POST["uid"]);
$pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);






    switch ($_POST['subMEET']) {
        case 'subCreate':
            //the Prepared statements below are safer compared to mysqli 
            //These prepared statements are ONLY used in procedural programming and NOT object oriented programming
            // created a template
            $sqlPS = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";
            //creating a prepared statement
            $stmtPS = mysqli_stmt_init($conn);
            // preparing the prepared statement
            if (!mysqli_stmt_prepare($stmtPS, $sqlPS)) {
                #checking for failure using the !(not) operator
                echo "SQL error";
            } else {
                #binding parameters to the placeholder '?'. the second parameter indicates that the parameter will be a string type. The third parameter is the actual data to be inserted instead of the placeholder (only used when we want to select the specified user in the variable).
                mysqli_stmt_bind_param($stmtPS, "sssss", $first, $last, $email, $uid, $pwd);
                #running parameters/running the code inside database
                mysqli_stmt_execute($stmtPS);
            }
        break;

        case 'subRead':
            $data = $_POST['uid'];
            $sqlPS = "SELECT * FROM users WHERE user_uid = ?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sqlPS)) {
                echo "SQL statements failed";
            } else {
                mysqli_stmt_bind_param($stmt, "s", $data);
                mysqli_stmt_execute($stmt); 
                $result = mysqli_stmt_get_result($stmt);        #getting the actual data/results from the executed statement above
                while ($row = mysqli_fetch_assoc($result)) {
                    echo $$row['user_uid'] . "<br>";
                }
            }
        break;
        
        case 'subUpdate':
            $data = $_POST['uid'];
            $sqlPS = "UPDATE users SET user_uid = 'User' WHERE user_uid = ?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sqlPS)) {
                echo "SQL statements failed";
            } else {
                mysqli_stmt_bind_param($stmt, "s", $data);
                mysqli_stmt_execute($stmt); 
                echo "You have successfully changed your username to 'user'";   
            }
        break;

        case 'subDelete':
            $data = $_POST['uid'];
            $sqlPS = "DELETE FROM users WHERE user_uid = ? OR user_uid = 'user';";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sqlPS)) {
                echo "SQL statements failed";
            } else {
                mysqli_stmt_bind_param($stmt, "s", $data);
                mysqli_stmt_execute($stmt); 
                echo "You have successfully deleted your profile";   
            }
        break;


    }
