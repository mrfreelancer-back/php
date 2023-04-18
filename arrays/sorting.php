<?php
$numbers = array();

for ($i = 0; $i < 5; $i += 1){
    $num = $i + 1;
    $numbers[$i] = readline(prompt: "enter number ".$num.": ");
}

echo "unsorted:\n";
print_r($numbers);

for ($i = 0; $i < count($numbers); $i += 1){
    for ($j = 0; $j < count($numbers); $j += 1){
        if ($numbers[$j] > $numbers[$i]){
            $temp = $numbers[$j];
            $numbers[$j] = $numbers[$i];
            $numbers[$i] = $temp;
        }
    }
}

echo "sorted:\n";
print_r($numbers);