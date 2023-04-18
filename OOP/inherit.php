<?php
class Film{
    protected $duration;
    protected $genre;
    protected $title;

    public function getDuration(){
        return "duration: ".$this->duration."\n";
    }

    public function setDuration($tm){
        $this->duration = $tm;
    }
}

class Documentary extends Film{
    private $docGenre;

    public function play(){
        echo "Documentary is playing for $this->duration...\n";
    }
}

class Action extends Film{
    private $star;

    public function play(){
        echo "Action movie is playing for $this->duration...\n";
    }
}

$wildLife = new Documentary();
$wildLife->setDuration(tm: "30:58");
$wildLife->play();
echo $wildLife->getDuration();

$redNotice = new Action();
$redNotice->setDuration(tm: "2:11:30");
$redNotice->play();
echo $redNotice->getDuration();