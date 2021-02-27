<?php

// while
    // while (true) {
    //     #this will give an infinite loop because true will ALWAYS be true. Soit is better for a condition that will eventually become false
    // }

// Loop with $counter
    $counter = 0;
    while ($counter < 10) {
        echo $counter . '<br>';
        $counter++;
    }

    $counterW = 0;
    while ($counterW < 0) {
        echo 'counterW - ' . $counterW . '<br>';
        $counterW++;
    }

    $counter2 = 0;
    while ($counter2 < 10) {
        echo $counter2 . '<br>';
        if ($counter2 === 5) {
            break;
        }
        $counter2++;
    }

// do - while
    $counter3 = 0;
    do {
        echo $counter3 . '<br>';
        $counter3++;
    } while ($counter3 < 10);

    $counterDW = 0;
    do {
        echo 'counterDW - ' . $counterDW . '<br>';
        $counterDW++;
    } while ($counterDW < 0);

// for
    for ($i = 0; $i < 10; $i++) {
        echo $i . '<br>';
    }

    #for adding 20
    for ($i = 0; $i < 1000; $i += 20) {
        echo $i . "<br>";
    }

// foreach
    $fruits = ['Banana', 'Apple', 'Orange'];
    foreach($fruits as $frut) {
        echo  $frut . '<br>'; 
    }

    foreach($fruits as $i => $frut2) {
        echo $i . ' ' . $frut2 . '<br>';
    }

// Iterate Over associative array.
    $person = [
        'name' => 'Yvonne',
        'surname' => 'Mwema',
        'age' => 25,
        'hobbies' => ['Violin', 'Crotchet']
    ];
    foreach ($person as $key => $value) {
        echo '$key-' . $key . ' : ' . '$value-' . $value . '<br>';
    }

    foreach ($person as $key => $value) {
        if (is_array($value)) {
            echo '$key-' . $key . ' : ' . '$value-' . implode(", ", $value) . '<br>'; 
        } else {
            echo '$key-' . $key . ' : ' . '$value-' . $value . '<br>';
        }
    }