<?php
$num1 = readline();
$num2 = readline();
$num3 = readline();

if ($num1 >= $num2){
    if ($num1 >= $num3){
        echo "biggest: ".$num1."\n";
    }
    else{
        echo "biggest: ".$num3."\n";
    }
    if ($num2 <= $num3){
        echo "smallest: ".$num2;
    }
    else {
        echo "smallest: ".$num3;
    }
}
else {
    if ($num2 >= $num3){
        echo "biggest: ".$num2."\n";
    }
    else {
        echo "biggest: ".$num3."\n";
    }
    if ($num1 <= $num3){
        echo "smallest: ".$num1;
    }
    else {
        echo "smallest: ".$num3;
    }
}