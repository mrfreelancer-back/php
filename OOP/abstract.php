<?php
abstract class Human{
    public $name;
    public $sex;

    public abstract function iAmHuman();
}

class Male extends Human{
    public function iAmHuman(){
        echo "I am a male human!\n";
    }
}

class Female extends Human{
    public function iAmHuman(){
        echo "I am a female human!\n";
    }
}

$woman = new Female();
$woman->sex = "female";
$woman->name = "mrs.someone";
$woman->iAmHuman();
echo $woman->sex."\n";
echo $woman->name."\n";

$man = new Male();
$man->sex = "male";
$man->name = "mr.someone";
$man->iAmHuman();
echo $man->sex."\n";
echo $man->name."\n";