<?php

// Database connection details
//database connectoin using phpMyAdmin
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'question7';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, secret FROM clients";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $clientId = $row['id'];
    $clientName = $row['name'];
    $clientSecret = $row['secret'];

    header('Content-Type: application/json');
    echo json_encode([
        'client_id' => $clientId,
        'client_name' => $clientName,
        'client_secret' => $clientSecret
    ]);
}

$conn->close();
