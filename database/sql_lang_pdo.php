<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "my_porject";
try{
    $cnct = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $cnct->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
    $sql = "insert into assays(title, body, author) values('title by PDO', 'a PDO body...', 'PDO');";
    $cnct->exec($sql);
    $id = $cnct->lastInsertId();
    echo "new row added by PDO! last id: ".$id;
}
catch (PDOException $e){
    echo $sql." ".$e->getMessage();
}