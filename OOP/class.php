<?php
class Movie{
    public $name;
    public $director;
    public $starring;
    public $releaseDate;
}

$avengers = new Movie();
$avengers->name = "avengers: endgame";
$avengers->director = "russo";
$avengers->releaseDate = 2019;
$avengers->starring = "robert downey";

$redNotice =  new Movie();
$redNotice->name = "red notice";
$redNotice->director = "thurber";
$redNotice->releaseDate = 2021;
$redNotice->starring = "rock";

echo $redNotice->starring." played in ".$redNotice->name." in ".$redNotice->releaseDate." , created by ".$redNotice->director."\n";
echo $avengers->starring." played in ".$avengers->name." in ".$avengers->releaseDate." , created by ".$avengers->director;
