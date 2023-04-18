<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function validation($input){
    $input = trim($input);
    $input = htmlspecialchars($input);
    return $input;
}

if(empty($_POST["user_name"])){
    echo "please choose a username!";
}
else{
    echo validation($_POST["user_name"])."<br>";
}
if(empty($_POST["password"])){
    echo "please choose a password!";
}
else{
    echo validation($_POST["password"])."<br>";
}
if(empty($_POST["email"])){
    echo "please enter your email address!";
}
else{
    echo validation($_POST["email"])."<br>";
}
if(!empty($_POST["phone_number"])){
    echo validation($_POST["phone_number"])."<br>";
}
if(!empty($_POST["age"])){
    echo validation($_POST["age"])."<br>";
}
if(!empty($_POST["biography"])){
    echo validation($_POST["biography"])."<br>";
}
?>

</body>
</html>
