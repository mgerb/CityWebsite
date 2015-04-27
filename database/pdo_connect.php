<?php
//$servername = "localhost";
$servername = "us-cdbr-iron-east-02.cleardb.net";
$username = "bb3aea111a8436";
$password = "02a8282f";

try {
    $conn = new PDO("mysql:host=$servername;dbname=heroku_1aedaa263a1a164", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>