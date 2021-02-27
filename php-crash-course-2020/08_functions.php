<?php

// Function which prints "Hello I am Zura"
    function hello() {
        echo 'Hello World!' . '<br>';
    }
    hello();
    hello();
    hello();

// Function with argument
    function hello2($name) {
        echo "Hello I am $name" . '<br>';
    }

    hello2("Josh");
    hello2("Dad");
    hello2("Mom");

    function hello3($name) {
        return "Hello I am $name" . '<br>';
    }
    hello3("Yvonne");   #outputs nothing
    echo hello3("Yvonne");      #outputs the returned value

// Create sum of two functions
    function add($a , $b) {
        return $a + $b . '<br>';
    }
    echo add(5, 9);


// Create function to sum all numbers using ...$nums
    function sumAll(...$nums) {
        $initial = 0;
        foreach ($nums as $digits) {
            $initial += $digits;        #same as $initial = $initial + $digits
        }
        return $initial . '<br>';
    }           #takes all numbers and adds them to an array
    echo sumAll(5, 9, 34, 3, 432, 33344, 10000000);

// Arrow functions
    function sumAll2(...$nums) {
       return array_reduce($nums, fn($carry, $n) => $carry + $n) . '<br>';
    }          #same as the above
    echo sumAll2(5, 9, 34, 3, 432, 33344, 10000000);