<?php

$age = 20;
$salary = 300000;

// Sample if
    if ($age === 20) {
        echo '1';
    }
    echo '<br>';
// Without curly braces
    #for a single line
    if ($age < 30) echo '2';
    echo '<br>';

// Sample if-else
    if ($age > 20) {
        echo "greater";
    } else {
        echo "lesser or equal to";
    }
    echo '<br>';

// Difference between == and ===
    if ($age == 20) {
        echo "1" . '<br>';
    } 
    if ($age == '20') {
        echo "2" . '<br>';
    }

    if ($age === 20) {
        echo "3" . '<br>';
    } 
    if ($age === '20') {
        echo "4" . '<br>';
    } else {
        echo '5' . '<br>';
    }
// if AND
    if ($age == 20 && $salary === 300000) {
        echo "Do something and...." . '<br>';
    } 

// if OR
    if ($age > 20 || $salary === 300000) {
        echo "Do something or..." . '<br>';
    }           #the first value is false but it will evaluate to true since the second condition is true

// Ternary if
    echo $age < 22 ? "young" : "old!";

// Short ternary
    $myAge = $age ?: 18;        # ?: checks whether the age exists, if not, it will give the variable the value 18
    echo '<pre>';
        var_dump($myAge);
    echo '</pre>';

    $age = 0;
    $falseAge = $age ?: 18; 
    echo '<pre>';
        var_dump($falseAge);
    echo '</pre>';

// Null coalescing operator
    $myName = isset($name) ? $name : "John";            #checks whether name is set/declared, if not then set to "John"

        #or an equivalent short form of the above
        $myName = $name ?? "John";

// switch
    $userRole = "admin";
    switch ($userRole) {
        case 'admin':
            echo 'ADMIN';
            break;
        case 'editor':
            echo 'EDITOR';
            break;
        case 'user':
            echo 'USER';
            break;
        default:
            echo 'Invalid Role';
    }