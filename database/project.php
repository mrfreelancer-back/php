<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <th>id</th>
        <th>title</th>
        <th>body</th>
        <th>date</th>
        <th>author</th>
    </thead>
<?php
if ($_SERVER["REQUEST_METHOD"] != "POST"){
    echo "you need to post the datas!";
}
else{
    $hostname = "localhost";
    $user = "root";
    $pass = "";
    $DBname = "example";

    $cnct = new mysqli($hostname, $user, $pass, $DBname);

    if ($cnct->connect_error){
        die("Error: ".$cnct->connect_error);
    }

    $sql = "select * from authentication";
    $rslt = $cnct->query($sql);
    $row = $rslt->fetch_assoc();

    if ($_POST["email"] == $row["email"] || $_POST["username"] == $row["username"]){
        echo "username or email already used!";
    }
    else{
        if (isset($_POST["username"])){
            $username = $_POST["username"];
        }
        else{
            die("username is missed!");
        }
        
        if (isset($_POST["email"])){
            $email = $_POST["email"];
        }
        else{
            die("email is missed!");
        }

        $sql_insert = "insert into authentication(username, email) values('$username', '$email')";
        if ($cnct->query($sql_insert) == TRUE){
            echo "information sent!";
        }
        else{
            echo "Error: ".$cnct->connect_error;
        }
        while ($row = $rslt->fetch_assoc()){
            echo "<tr>
            <td>".$row["email"]."</td>
            <td>".$row["username"]."</td>
            <td>".$row["register_date"]."</td>
            </tr>";
        }
    }

    $cnct->close();
}
?>
</table>    
</body>
</html>