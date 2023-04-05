<?php
$age = readline(prompt: "Hi! enter your age: ");

if ($age > 0 && $age <= 20) {
    echo "Hi! kid :))";
}
elseif ($age > 20 && $age <= 40) {
    echo "Hi! maaan :)";
}
elseif ($age > 40 && $age <= 60) {
    echo "Hi! you're getting old man :(";
}
elseif ($age > 60) {
    echo "Hi! old man :((";
}
else {
    echo "Sorry! invalid age...";
}