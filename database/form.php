<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "mu_porject";

if ($_SERVER["REQUEST_METHOD"] != "POST"){
    die("you should post datas");
}
# creating connection
$cnct = new mysqli($host, $user, $pass, $db);
#checking connection
if ($cnct->connect_error){
    die("Error: ".$cnct->connect_error);
}
if (isset($_POST["title"])){
    $title = $_POST["title"];
}
else{
    die("title is missed!");
}
if (isset($_POST["body"])){
    $body = $_POST["body"];
}
else{
    die("body is missed!");
}
if (isset($_POST["author"])){
    $author = $_POST["author"];
}
else{
    die("author is missed!");
}

$sql = "insert into assays(title, body, author) values('$title', '$body', '$author')";

if ($cnct->query($sql) == TRUE){
    $id = $cnct->insert_id;
    echo "new row added! last id: ".$id;
}
else{
    echo "Error: ".$sql." ".$cnct->error;
}

$cnct->close();