<?php
$myfile = fopen(filename: "names.txt", mode: "a") or die("Error!");

fwrite($myfile, data: "Ali Barkhordar2\n");
fwrite($myfile, data: "Mohamad Alavi2\n");

fclose($myfile);

echo "appended in names.txt";