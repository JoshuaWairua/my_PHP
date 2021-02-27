<?php

// an array is a variable that contains a list of values

// Create array
    $fruits = ["Banana", "Apple", "Orange"];
    $fruits2 = array();         #is the old way of declaring variables

// Print the whole array
    var_dump($fruits);      #view page source to see a better output
    echo '<pre>';
        var_dump($fruits);
    echo '</pre>';          #used to get a better output in the webpage

        #another way to  print an array in the webpage
        echo '<pre>';
            print_r($fruits);
        echo '</pre>';
// Get element by index
    echo $fruits["1"] . '<br>';

// Set element by index
    $fruits[0] = 'Peach'; 
    echo '<pre>';
        var_dump($fruits);
    echo '</pre>';
// Check if array has element at index 2
    isset($fruits[2]);  #evaluates to true since there is a third element in the array that has an index 2
    isset($fruits[4]);  #evaluates to false since there is no fifth element in the array that has an index 4

// Append element
    $fruits[] = 'Pears'; 
    echo '<pre>';
        var_dump($fruits);
    echo '</pre>';

// Print the length of the array
    echo count($fruits) . '<br>';

// Add element at the end of the array
    echo 'push: ' . array_push($fruits, 'foo');
    echo '<pre>';
        var_dump($fruits);
    echo '</pre>';

// Remove element from the end of the array
    echo 'pop: ' . array_pop($fruits);
    echo '<pre>';
        var_dump($fruits);
    echo '</pre>';
// Add element at the beginning of the array
    array_unshift($fruits, 'Avocado');
    echo '<pre>';
        var_dump($fruits);
    echo '</pre>';

// Remove element from the beginning of the array
    array_shift($fruits);

// Split the string into an array
    $string = "Bananas, Apples, Peaches";
    
    echo '<pre>';
        var_dump(explode(", ", $string));
    echo '</pre>';    

// Combine array elements into string
    echo implode("& ", $fruits);

// Check if element exist in the array
    echo '<pre>';
        var_dump(in_array('Apple', $fruits));
    echo '</pre>';

// Search element index in the array
    echo '<pre>';
        var_dump(array_search('Orange', $fruits));
    echo '</pre>';

// Merge two arrays
    $vegies = ['Kales', 'Spinach'];
    echo '<pre>';
        var_dump(array_merge($fruits, $vegies));
    echo '</pre>';

    #using the spread operator to do the same
    $vegies2 = ['Kales', 'Spinach'];
    echo '<pre>';
        var_dump([...$vegies, ...$fruits]);
    echo '</pre>';

// Sorting of array (Reverse order also)
    sort($fruits);
    echo '<pre>';
        var_dump($fruits);
    echo '</pre>';

    rsort($fruits);
    echo '<pre>';
        var_dump($fruits);
    echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays       - key-value pairs
// ============================================

// Create an associative array
    $person = [
        'name' => 'Yvonne',
        'surname' => 'Mwema',
        'age' => 25,
        'hobbies' => ['Violin', 'Crotchet']
    ];
    echo '<pre>';
        var_dump($person);
    echo '</pre>';
// Get element by key
    echo $person['name'] . '<br>';

// Set element by key
    $person['work'] = 'Caregiver';
    echo '<pre>';
        var_dump($person);
    echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
    if (!isset($person['address'])) {
        $person['address'] = 'unknown';
    }       #checks whether the person has an address, if not (!isset), then this function sets the address to 'unknown'
    echo '<pre>';
        var_dump($person);
    echo '</pre>';

    #OR SHORTER VERSION
        $person['address'] ??= 'unkowni';        #dows the same thing as above
        
        echo '<pre>';
            var_dump($person);
        echo '</pre>';
// Check if array has specific key

// Print the keys of the array
    echo '<pre>';
        var_dump(array_keys($person));
    echo '</pre>';

// Print the values of the array
    echo '<pre>';
        var_dump(array_values($person));
    echo '</pre>';

// Sorting associative arrays by values, by keys
    ksort($person);         #sorting by keys
    echo '<pre>';
        var_dump($person);
    echo '</pre>';

    asort($person);         #sorting by values
    echo '<pre>';
        var_dump($person);
    echo '</pre>';

// Two dimensional arrays
    $todos = [
        ['title' => 'Todo title 1', 'Completed' => true],
        ['title' => 'Todo title 2', 'Completed' => false]
    ];
    echo '<pre>';
        var_dump($todos);
    echo '</pre>';