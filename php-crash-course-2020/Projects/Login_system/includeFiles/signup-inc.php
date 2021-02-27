<?php
    include_once "dbHandler-inc.php";

    $first = $_POST["first"];
    $last = $_POST["last"];
    $email = $_POST["email"];
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // creating a session variable
    $_SESSION['username'] = $_POST["uid"];

        switch ($_POST['subMEET']) {
            case 'subCreate':
                 // creating/inserting data into db
                 $sqlCreate = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
                 mysqli_query($conn, $sqlCreate);
                    // taking the user back to the home page after successfully/unsuccessfully creating a user profile
                    echo "You have successfully created your profile!";
            break;

            case 'subRead':                
                // selecting data inside the db
                    $sqlRead = "SELECT * FROM users WHERE user_uid='" . $_POST["uid"] . "';";
                    $resultR = mysqli_query($conn, $sqlRead);   #querrying the code that sends the line of code above to the db. the first parameter is the database connection variable defined in the dbHandler-inc.php file and the second one is the $sql variable above
                // Reading Data from db
                    $resultCheck = mysqli_num_rows($resultR);  #checking if there are any results from the code above. It is optional but recommended. It returns the number of rows that are found. If 0, then there was no results. If greater than zero, then the query returned at least one result
                    if ($resultCheck > 0) {
                        #fetching the data from the querried result in the db and assigning the fetched data into an array called $row
                        while ($row = mysqli_fetch_assoc($resultR)) {
                            echo "Hi " . $row["user_uid"] . "! Welcome to my chocolate factory!". "<br>";       #the names of the $row array will be the columns of the table 
                        }
                    }
            break;

            case 'subUpdate':
                // updating data into db
                $sqlUpdate = "UPDATE users SET user_uid = 'User' WHERE user_uid = '" . $_POST["uid"] . "';";
                mysqli_query($conn, $sqlUpdate);
                echo "You have successfully changed your username to 'user'";                
            break;

            case 'subDelete':
                // creating/inserting data into db
                $sqlDelete = "DELETE FROM users WHERE user_uid = '" . $_POST["uid"] . "' OR user_uid = 'user';";
                mysqli_query($conn, $sqlDelete);
                echo "You have successfully deleted your profile!";
            break;
        }

    
?>