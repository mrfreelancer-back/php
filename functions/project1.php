<?php
$nm = readline(prompt: "number: ");

function fctrl(int $nmbr = 1){
    $fct = 1;
    for ($nm = 1; $nm <= $nmbr; $nm += 1){
        $fct = $fct * $nm;
    }
    return $fct;
}

echo fctrl($nm);