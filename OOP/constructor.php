<?php
class Animal{
    public $name;
    public $food;
    public $wild;
    public $fly;

    function __construct($nm, $fd, $wld, $fl){
        $this->wild = $wld;
        $this->fly = $fl;
        $this->food= $fd;
        $this->name = $nm;
    }

    function __destruct(){
        echo "destructed!";
    }
}

$chicken = new Animal(nm: "chicken", fd: "wheat", wld: "no", fl: "no");
echo $chicken->name."\n";