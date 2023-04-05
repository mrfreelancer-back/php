<?php
echo "Hi! I'm AB's chat bot :-)\n\n";
$chat = readline(prompt: "Do you want to start chatting?(y/n) ");
echo "\n";
$steps = 1;

if ($chat == 'y'){
    $l_n = "";
    while ($chat == 'y'){
        if ($steps == 1){
            $f_n = readline(prompt: "What's your first name? ");
            echo "\n";
            echo "Hi ".$f_n."! it's nice to meet you!\n\n";
            $chat = readline(prompt: "Do you want to continue chatting?(y/n) ");
            $steps += 1;
        }
        elseif ($steps == 2){
            echo "\n";
            $l_n = readline(prompt: "What's your last name? ");
            echo "\n";
            echo "OK! I know your full name now, ".$f_n." ".$l_n." :)\n\n";
            $chat = readline(prompt: "Do you want to continue chatting?(y/n) ");
            $steps += 1;
        }
        else {
            echo "\n";
            $age = readline(prompt: "How old are you? ");
            if ($age > 0 && $age < 100){
                if ($age > 0 && $age < 12){
                    echo "\n";
                    echo "OK ".$f_n."! I know you're a kid :)\n\n";
                    break;
                }
                elseif ($age >= 12 && $age < 18){
                    echo "\n";
                    echo "OK ".$f_n."! I know you're a teenager :)\n\n";
                    break;
                }
                elseif ($age >= 18 && $age < 30){
                    echo "\n";
                    echo "OK ".$f_n."! I know you're a young person :)\n\n";
                    break;
                }
                elseif ($age >= 30 && $age < 50){
                    echo "\n";
                    echo "OK ".$f_n."! I know you're a middle-aged :)\n\n";
                    break;
                }
                elseif ($age >= 50 && $age < 60){
                    echo "\n";
                    echo "OK ".$f_n."! I know you're getting old :)\n\n";
                    break;
                }
                elseif ($age >= 60){
                    echo "\n";
                    echo "OK ".$f_n."! I know you're an old person :)\n\n";
                    break;
                }
            }
            else {
                echo "Sorry! age invalid!!!\n";
                break;
            }
        }
    }
    echo "\nBye bye ".$f_n." ".$l_n." :-)";
}
elseif ($chat == 'n'){
    echo "OK! bye :)";
}
else {
    echo "Sorry! wrong answer :(";
}