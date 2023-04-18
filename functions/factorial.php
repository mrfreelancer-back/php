<?php
function factorial_loop($num){
    $rslt = 1;
    for ($nm = 1; $nm<= $num; $nm += 1){
        $rslt = $rslt * $nm;
    }
    return $rslt;
}

function factorial_rcrsv($num){
    if ($num == 1){
        return 1;
    }
    return $num * factorial_rcrsv(num: $num - 1);
}

$number = readline(prompt: "number: ");
echo "function with loop: ".factorial_loop($number)."\n";
echo "recursive function ".factorial_rcrsv($number);