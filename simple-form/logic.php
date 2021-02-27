<?php
    include_once "./config.php";

    $_SESSION['userEmail'] = $_POST["email"];

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];



    switch ($_POST['subMEET']) {
        case 'create':
             $sqlCreate = "INSERT INTO users (firstName, lastName, email) VALUES ('$firstName', '$lastName', '$email');";
             mysqli_query($conn, $sqlCreate);
                echo "You have successfully created your profile!" . "<br>" ;
                echo "To view your profile, go back and click the " . "<b>" . "Read" . "</b>" . " button!" . "<br>" ;
        break;

        case 'read':                
            $sqlRead = "SELECT * FROM users WHERE email='" . $_POST["email"] . "';";
            $resultR = mysqli_query($conn, $sqlRead);  
            $resultCheck = mysqli_num_rows($resultR);       #checking returned result rows
            if ($resultCheck > 0 && $row = mysqli_fetch_assoc($resultR)) {
                    echo "Hi " . $row["firstName"] . "! Welcome to my chocolate factory!". "<br>";
                    echo "To change your email to a generic email, go back and click the " . "<b>" . "Update" . "</b>" . " button!" . "<br>" ;
            }
        break;

        case 'update':
            $sqlUpdate = "UPDATE users SET email = 'generic@email.com' WHERE email = '" . $_POST["email"] . "';";
            mysqli_query($conn, $sqlUpdate);
            echo "Hi " . $_POST["firstName"] . ", you have successfully changed your email to 'generic@email.com'" . "<br>";
            echo "To delete your profile, go back and click the " . "<b>" . "Delete" . "</b>" . " button!" . "<br>" ;                
        break;

        case 'delete':
            $sqlDelete = "DELETE FROM users WHERE email = '" . $_POST["email"] . "' OR email = 'generic@email.com';";
            mysqli_query($conn, $sqlDelete);
            echo "We are sorry to see you go. We hope to see you soon. All the best!" . "<br>";
            echo "To create another profile, go back and click the " . "<b>" . "Create" . "</b>" . " button!" . "<br>" ;
        break;
    }

?>