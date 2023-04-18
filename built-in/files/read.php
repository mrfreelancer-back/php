<?php
$myfile = fopen(filename: "file.txt", mode: "r") or die("unable to open file!");

while (!feof($myfile)){
    echo fgets($myfile)."\n";
}

fclose($myfile);