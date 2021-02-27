<?php

// Declaring numbers
    $a = 5;
    $b = 67;
    $c = 1.2;
// Arithmetic operations
    echo $a + $c . '<br>'; 
    echo ($a + $b) * $c . '<br>';
    echo $b % $a . '<br>';

// Assignment with math operators
    $a = $a + $b;       #is the same as $a += $b;
    echo $a . '<br>';

// Increment operator
    echo $a++ . '<br>';     //increases value after echoing
    echo ++$a . '<br>';     //increases value before echoing
// Decrement operator
    echo $a-- . '<br>';     //decreases value after echoing
    echo --$a . '<br>';     //decreases value before echoing
// Number checking functions
    is_float(1.34);
    is_double(0.432);
    is_int(6);
    is_numeric("334.2");    #gives true
    is_numeric("67.4g");    #gives false
// Conversion
    $stringNum = "23.87";
    $number = (float)$stringNum;
    var_dump($number);
    
    $stringNum2 = "23.87";
    $number2 = (int)$stringNum2;
    var_dump($number2);

    #another way
    $stringNum3 = "23.87";
    $number3 = floatval($stringNum3);
    $stringNum3 = "23.87";
    $number3 = intval($stringNum3);
    echo '<br>';
// Number functions
    echo "abs(-167)" . abs(-167) . '<br>';
    echo "pow(5, 3)" . pow(5, 3) . '<br>';
    echo "sqrt(64)" . sqrt(64) . '<br>';
    echo "max(2, 3)" . max(2, 3) . '<br>';
    echo "min(2, 3)" . min(2, 3) . '<br>';
    echo "round(2.49)" . round(2.49) . '<br>';
    echo "round(2.99)" . round(2.99) . '<br>';
    echo "floor(2.6)" . floor(2.6) . '<br>';
    echo "ceil(2.4)" . ceil(2.4) . '<br>';
// Formatting numbers
    $number4 = 1234546878123.13412345;
    echo number_format($number4, 2, 'dot', 'space ');


// https://www.php.net/manual/en/ref.math.php       -link to php math functions
