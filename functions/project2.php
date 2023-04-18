<?php
$nmbr = readline(prompt: "number: ");

function rcrsv(int $nm = 2){
    if ($nm == 2){
        return 2;
    }
    return $nm * rcrsv(nm: $nm - 1);
}

echo rcrsv($nmbr);