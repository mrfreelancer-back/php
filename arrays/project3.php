<?php
$nums = array();

for ($i = 0; $i < 10; $i += 1){
    $nums[$i] = readline(prompt: "enter number: ");
}

$number = readline(prompt: "enter the detecting number: ");

$x = 0;
for ($i = 0; $i < count($nums); $i += 1){
    if ($nums[$i] == $number){
        $x = 1;
    }
}

if ($x == 1){
    echo "the dececting number is in the array :)";
}
else {
    echo "the dececting number is not in the array :(";
}