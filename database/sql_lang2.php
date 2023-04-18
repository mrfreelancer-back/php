<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "my_porject";

$cnct = new mysqli($host, $user, $pass, $db);

if ($cnct->connect_error){
    die("Error: ".$cnct->connect_error);
}

$sql = "insert into assays(title, body, author) values('a title', 'a body...', 'a person');";

if ($cnct->query($sql) == TRUE){
    $id = $cnct->insert_id;
    echo "new row added with OOP! last ID is: ".$id;
}
else{
    echo "Error: ".$sql." ".$cnct->error;
}

$cnct->close();