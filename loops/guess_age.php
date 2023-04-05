<?php
$age = readline(prompt: "enter your age: ");
$tst = 0;

for ($a = 1; $a < 100; $a += 1){
    if ($a == $age){
        echo "I found it! you are ".$a." !!!";
        $tst = 1;
    }
}

if ($tst == 0){
    echo "Sorry! you're age must be in range 1 to 99!";
}