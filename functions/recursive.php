<?php
$number = readline(prompt: "enter the number: ");

function fact($number){
    if ($number == 1){
        return 1;
    }
    return $number * fact(number: $number - 1);
}

echo fact($number);
