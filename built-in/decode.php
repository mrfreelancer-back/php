<?php
$json_string = '{"ali": 17,"helma": 3,"mahya": 7}';

$json_arr = json_decode($json_string, true);

echo $json_arr["ali"]."\n";
echo $json_arr["helma"]."\n";
echo $json_arr["mahya"]."\n";