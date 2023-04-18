<?php
function fbncc(int $num = 3){
    if ($num == 2 || $num == 1){
        return 1;
    }
    return fbncc(num: $num - 2) + fbncc(num: $num - 1);
}

$number = readline(prompt: "number: ");
echo fbncc($number);