<?php
class Numbers{
    const NUMBER1 = 11;

    public function useConst(){
        return self::NUMBER1;
    }
}

function run(){
    echo Numbers::NUMBER1."\n";
}
run();

$obj = new Numbers();
echo $obj->useConst();