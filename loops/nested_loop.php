<?php
$columns = readline(prompt: "enter the columns: ");
$rows = readline(prompt: "enter the rows: ");
$name = readline(prompt: "What's your first name? ");

for ($row = 1; $row <= $rows; $row += 1){
    for($column = 1; $column <= $columns; $column += 1){
        echo $name." ";
    }
    echo "\n";
}