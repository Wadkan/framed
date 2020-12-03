<?php

$path = __DIR__.'/config.json';
$str = file_get_contents($path);
$json = json_decode($str, true); // decode the JSON into an associative array

$servername = "localhost";
$username = $json["username"];
$password = $json["password"];
$db = $json["db"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

