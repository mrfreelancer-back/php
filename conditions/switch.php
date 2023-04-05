<?php
$num1 = readline(prompt: "first number: ");
$num2 = readline(prompt: "second number: ");
$operator = readline(prompt: "choose an operator:(- + * /) ");

switch ($operator) {
    case '-':
        $result = $num1 - $num2;
        break;
    case '+':
        $result = $num1 + $num2;
        break;
    case '*': 
        $result = $num1 * $num2;
        break;
    case '/':
        $result = $num1 / $num2;
        break;
    default:
        $result = "wrong operator :(";
        break;
}

echo $result;