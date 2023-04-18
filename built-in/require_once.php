<?php
# runs connection.php codes only once, no two queries!
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] = "POST"){
    die("Error");
}

$sql = "insert into sample_t values ('...', '...')";

if ($cnct->query($sql) == TRUE){
    $id = $cnct->insert_id;
    echo "New record! last ID is: ".$id;
}
else{
   die("Error: ".$cnct->error); 
}