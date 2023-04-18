<?php
$host = "localhost";
$user = "root";
$pass = "";

try{
    $cnct = new PDO("mysql:host=$host;dbname=pdo", $user, $pass);
    # set PDO error mode to exception:
    $cnct->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
    
    echo "successfully connected!";
}
catch (PDOException $e){
    echo "Error: ".$e->getMessage();
}