<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "my_porject";

$cnct = mysqli_connect($host, $user, $pass, $db);

if (!$cnct){
    die("Error: ".mysqli_connect_error());
}

$sql = "insert into assays(title, body, author) values('chemitry', 'an assay about chemistry', 'ali');";

if (mysqli_query($cnct, $sql)){
    $id = mysqli_insert_id($cnct);
    echo "new row added with FP! last ID is: ".$id;
}
else{
    echo "Error: ".$sql." ".mysqli_error($cnct);
}

mysqli_close($cnct);