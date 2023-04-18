<?php
$nums = array();

for ($i = 0; $i < 10; $i += 1){
    $num = $i + 1;
    $nums[$i] = readline(prompt: "enter number ".$num.": ");
}

$sum = 0;
for ($i = 0; $i < count($nums); $i += 1){
    $sum += $nums[$i];
}

echo $sum;