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
$host = "localhost";
$user = "root";
$pass = "";
$db = "my_porject";

$cnct = new mysqli($host, $user, $pass, $db);

if ($cnct->connect_error){
    die("connecting to DB failed!".$cnct->connect_error);
}

$sql = "select * from assays";
$result = $cnct->query($sql);
?>
<table>
    <thead>
        <th>id</th>
        <th>title</th>
        <th>body</th>
        <th>date</th>
        <th>author</th>
    </thead>
<?php
if ($result->num_rows > 0){
    # taking data from each row
    while ($row = $result->fetch_assoc()){
        echo "<tr>
        <td>".$row["id"]."</td>
        <td>".$row["title"]."</td>
        <td>".$row["body"]."</td>
        <td>".$row["date"]."</td>
        <td>".$row["author"]."</td>
        </tr>";
    }
}
else{
    echo "No result";
}

$cnct->close();
?>
</table>
</body>
</html>