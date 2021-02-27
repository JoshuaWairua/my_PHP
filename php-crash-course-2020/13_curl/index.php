<?php
    #curl is a tool that gives you the posibility to interact remotely to other service or resources 

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
    $resource = curl_init($url);
    curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($resource);
    $code = curl_getinfo($resource, CURLINFO_HTTP_CODE);

    echo '<pre>';
        var_dump($code);
    echo '</pre>';
    echo $result;

// Get response status code

// set_opt_array

// Post request
