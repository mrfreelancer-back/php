<?php
class Actor{
    protected $name;
    protected $lName;
    public $age;
    private $hasBeard;

    function HasBeard(){
        return $this->hasBeard."\n";
    }

    function fullName(){
        return $this->name." ".$this->lName."\n";
    }

    function setBeard($brd){
        $this->hasBeard = $brd;
    }

    function setName($fn, $ln){
        $this->name = $fn;
        $this->lName = $ln;
    }
}

class Actress extends Actor{
    private $hairColor;

    function setHair($hr){
        $this->hairColor = $hr;
    }

    function getHair(){
        return $this->hairColor;
    }
}

$bradPitt = new Actor();
$bradPitt->setName(fn: "brad", ln: "pitt");
echo $bradPitt->fullName();

$bradPitt->setBeard(brd: "has");
echo $bradPitt->hasBeard();
$bradPitt->age = 59;
echo $bradPitt->age."\n";

$jlo = new Actress();
$jlo->setName(fn: "jennifer", ln: "lopez");
echo $jlo->fullName();

$jlo->age = 55;
echo $jlo->age."\n";
$jlo->setHair(hr: "blonde");
echo $jlo->getHair();