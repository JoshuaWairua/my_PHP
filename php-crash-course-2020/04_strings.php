<?php

// Create simple string
    $name = 'Joshua';
    $name2 = "Wairua";
    $string = "Hello $name $name2";
    $string2 = 'Hello $name $name2';

    echo $string . '<br>';
    echo $string2 . '<br>';
// String concatenation
    echo 'Hello ' . 'world ' . "and php" . '<br>';
// String functions
    $string = "    Hello World!      ";

    echo "1 - " . strlen($string) . '<br>';
    echo "2 - " . trim($string) . '<br>';
    echo "3 - " . ltrim($string) . '<br>';
    echo "4 - " . rtrim($string) . '<br>';
    echo "5 - " . str_word_count($string) . '<br>';
    echo "6 - " . strrev($string) . '<br>';
    echo "7 - " . strtoupper($string) . '<br>';
    echo "8 - " . strtolower($string) . '<br>';
    echo "9 - " . ucfirst($string) . '<br>';
    echo "10 - " . lcfirst($string) . '<br>';
    echo "11 - " . ucwords('hello world and php') . '<br>';
    echo "12 - " . strpos($string, 'World') . '<br>';
    echo "13 - " . stripos($string, 'world') . '<br>';
    echo "14 - " . substr($string, 8) . '<br>';
    echo "15 - " . str_replace('World', 'php', $string) . '<br>';
    echo "16 - " . str_ireplace('world', 'php', $string) . '<br>';
// Multiline text and line breaks
    $longText = "
        Hello computer,
        My name is Josh. 
        I am learning to program.
    ";
    echo $longText . '<br>';    #the html will ignore the white space. View page source to view structure.

    echo nl2br($longText) . '<br>';
// Multiline text and reserve html tags
    $longText = "
        Hello <b>computer</b>,
        My name is <b>Josh</b>. 
        I am learning to <b>program</b>.
    ";
    echo '1 - <br>' . $longText . '<br>';
    echo '2 - <br>' . nl2br($longText) . '<br>';
    echo '3 - <br>' . nl2br(htmlentities($longText)) . '<br>';
    echo html_entity_decode('&lt;b&gt;Josh&lt;/b&gt;');         #from the source code

    
// https://www.php.net/manual/en/ref.strings.php