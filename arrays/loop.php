<?php
$movies = ["avengers 3", "red notice", "batman vs superman", "mr and mrs smith", "venom"];

echo "my favorite movies:\n";
for($i = 0; $i < count($movies); $i += 1){
    echo $movies[$i]."\n";
}