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
function validate_input($input){
    $input = trim($input);
    $input = htmlspecialchars($input);
    return $input;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["first_name"])){
        echo "please write your first name!";
    }
    else{
        echo validate_input($_POST["first_name"])."<br>";
    }
    if (empty($_POST["last_name"])){
        echo "please write your last name!";
    }
    else{
        echo validate_input($_POST["last_name"])."<br>";
    }
    if (empty($_POST["password"])){
        echo "please write a password!";
    }
    else{
        echo validate_input($_POST["password"])."<br>";
    }
    if (!empty($_POST["comment"])){
        echo validate_input($_POST["comment"])."<br>";
    }
    if (!empty($_POST["age"])){
        echo validate_input($_POST["comment"])."<br>";
    }
    if (!empty($_POST["gender"])){
        echo validate_input($_POST["gender"])."<br>";
    }
}
else{
    echo "The result can't be shown cause your using unsafed method";
}
?>
</body>
</html>