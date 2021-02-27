<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 75% </title>
</head>
<body>
    <form action="" method="GET">
        <p>Please enter the number that you want to get 75% of: </p>
        <input type="text" name="myNumber" id="">
        <button type="submit" name="subMit"> Submit</button>
    </form>

    <?php
        if (isset($_GET['subMit'])) {
            $submittedNumber = $_GET['myNumber'];
        } 
        function calculate75 ($submittedNumber) {
            $submittedNumber *= 0.75;
            echo "This is 75% of your input: " . $submittedNumber;
        }
        calculate75($submittedNumber);
    ?>
</body>
</html>