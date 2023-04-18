<?php
# try catch finally
function divide($dividend, $divisor){
    if ($divisor == 0){
        throw new Exception("Division by zero!");
    }
    return "output: ".$dividend / $divisor;
}

try{
    echo divide(15, 2)."\n";
}
catch(Exception $err){
    echo "unable to divide!"."\n";
}
finally{
    echo "divided successfully";
}