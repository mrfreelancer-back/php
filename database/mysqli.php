<?php
$host = "localhost";
$user = "root";
$pass = "";

$cnct = mysqli_connect($host, $user, $pass);

if (!$cnct){
    die("connection failed: ".$mysqli_connect_error());
}

echo "connected successfully with FP :)";