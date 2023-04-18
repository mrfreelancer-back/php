<?php
$scores = array();

for ($i = 0; $i < 10; $i += 1){
    $scores[$i] = readline(prompt: "enter the score: ");
}

$number = readline(prompt: "enter the number you want to sum with: ");

for ($i = 0; $i < count($scores); $i += 1){
    if ($scores[$i] + $number > 20){
        $scores[$i] = 20;
    }
    else {
        $scores[$i] = $scores[$i] + $number;
    }
}

print_r($scores);