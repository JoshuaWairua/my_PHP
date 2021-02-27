<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables</title>
</head>
<body>
<?php
    //VARIABLES - doesn't  have types
    $name = "Josh";
    $age = 28;

    #Variable types
    // String
      $name = "Josh";
    // Integer
      $age = 28;
    // Float or Double
      $height = 1.85;
    // Boolean - it is converted into a string 1 for true and an empty string when false
      $isMale = true;
    // Null - converts into an empty string
      $salary = null;
    // Array
    // Object
    // Resource

    // printing the variable
    // the period concatenates strings and variables
      echo "<br>" . $name . "<br>";
      echo $age;

    // printing types of the variables
      echo gettype($name) . "<br>";
      echo gettype($age) . "<br>";
      echo gettype($isMale) . "<br>";
      echo gettype($height) . "<br>";
      echo gettype($salary) . "<br>";

    // printing the whole variable
    // var_dump() prints all the information about a data type. It is especially useful for objects and arrays
      var_dump($name, $salary, $age, $height, $isMale);        // prints type, (length), and specific data value

    // changing the value of a variable
      $name = false;
      echo "<br>" . gettype($name);

    // Variable checking functions
      is_string($name);
      is_integer($age);
      is_bool($isMale);
      echo "<br>" . is_double($height) . '<br>';

    // checking if variable is defined/declared 
      isset($name);     //true
      isset($address);    //false

    // constants
      define('PI', 3.14);
      echo PI . '<br>';

    // using php built-in constants
      echo SORT_ASC . '<br>';
      echo PHP_INT_MAX . '<br>';
?>

<!-- Application -->
  <form method="GET">
    <input type="text" name="person">
    <button type="submit">Submit</button>
  </form>

  <?php
    $yourName = $_GET['person'];
    echo "Hi " . $yourName . ". Welcome to the php world!";
  ?>
</body>
</html>