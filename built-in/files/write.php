<?php
$myfile = fopen(filename: "names.txt", mode: "w") or die("Error!");

fwrite($myfile, data: "Mohamad Alavi\n");
fwrite($myfile, data: "Ali Barkhordar\n");

fclose($myfile);
echo "wrote in names.txt";