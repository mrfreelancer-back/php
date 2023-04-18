<?php
$userame = 'root';
$pass = '';
$hostname = 'localhost';
$db = 'sample';

$cnct = new mysqli($hostname, $username, $pass, $db);

if ($cnct->error){
    die("Error: ".$cnct->error);
}