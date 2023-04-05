<?php
$age = readline(prompt: "Enter your age: ");

switch ($age) {
    case $age > 0 && $age <= 20:
        echo "young";
        break;
    case $age > 20 && $age <= 40:
        echo "grown man";
        break;
    case $age > 40 && $age <= 60:
        echo "getting old";
        break;
    case $age > 60:
        echo "old";
        break;
    default:
        echo "age is invalid :(";
}