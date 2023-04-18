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
    echo validate_input($_POST["first_name"])."<br>";
    echo validate_input($_POST["last_name"])."<br>";
    echo validate_input($_POST["password"])."<br>";
    echo validate_input($_POST["comment"])."<br>";
    echo validate_input($_POST["age"])."<br>";
    echo validate_input($_POST["gender"])."</br>";
}
else{
    echo "The result can't be shown cause your using unsafed method";
}
?>
</body>
</html>
