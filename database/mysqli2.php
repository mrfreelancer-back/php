<?php
$hostname = "localhost";
$username = "root";
$password = "";
# creating connection
$cnct = new mysqli($hostname, $username, $password);
# checking connection
if (!$cnct){
    die("Error: ".$cnct->connect_error);
}
echo "connected successfully with OOP :)";