<?php
function sum($num1, $num2){
    return $num1 + $num2;
}

function minus($num1, $num2){
    return $num1 - $num2;
}

function times($num1, $num2){
    return $num1 * $num2;
}

function devide($num1, $num2){
    return $num1 / $num2;
}

function invalid_opr(){
    return "invalid operator!!";
}

function invalid_num(){
    return "invalid number!!!";
}

$number1 = readline(prompt: "enter number 1: ");
$number2 = readline(prompt: "enter number 2: ");
$operator = readline(prompt: "choose an operator(- + * /) ");

if ($number1 && $number2){
    switch ($operator){
        case '-':
            $result = minus($number1, $number2);
            break;
        case '+':
            $result = sum($number1, $number2);
            break;
        case '*':
            $result = times($number1, $number2);
            break;
        case '/':
            $result = devide($number1, $number2);
            break;
        default:
            $result = invalid_opr();
            break;
    }
    
    echo $result;
}
else {
    echo invalid_num();
}
