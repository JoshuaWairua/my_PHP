<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="page-container">
        <form action="./logic.php" method="POST" class="sub-form">
            <label for="firstName"> First Name: </label>
            <input type="text" name="firstName" required> 
            <br>
            <label for="lastName"> Last Name: </label>
            <input type="text" name="lastName" required>
            <br>
            <label for="email"> Email: </label>
            <input type="email" name="email" required>
            <br>
            <button type="submit" name="subMEET" value="create" id="sendBtn"> Create    </button>
            <button type="submit" name="subMEET" value="read" id="sendBtn"> Read        </button>
            <button type="submit" name="subMEET" value="update" id="sendBtn"> Update    </button>
            <button type="submit" name="subMEET" value="delete" id="sendBtn"> Delete    </button>
        </form>
    </div>

    
</body>
</html>