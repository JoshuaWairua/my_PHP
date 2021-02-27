<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Programming</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
        $dayOfWeek = date("w");
        switch ($dayOfWeek) {
            case 0:
                echo "<p>It is Sunday!</p>";
            break;
            case 1:
                echo "<p>It is Monday!</p>";
            break;
            case 2:
                echo "<p>It is Tuesday!</p>";
            break;
            case 3:
                echo "<p>It is Wednesday!</p>";
            break;
            case 4:
                echo "<p>It is Thursday!</p>";
            break;
            case 5:
                echo "<p>It is Friday!</p>";
            break;
            case 6:
                echo "<p>It is Saturday!</p>";
            break;
        }
    ?>
</body>
</html>