<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : 'Guest';

    // Call the PHP function and get the result
    $response = greetUser($name);

    // Send the response back to the AJAX request
    echo $response;
}

function greetUser($name)
{
    return "Hello, " . htmlspecialchars($name) . "! Welcome to the site.";
}
