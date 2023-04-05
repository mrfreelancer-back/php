<?php
$chat = readline(prompt: "Hi! do you want to start the chat?(y/n) ");

if ($chat == 'y'){
    while ($chat == 'y'){
        $name = readline(prompt: "What's your name? ");
        echo "Hi ".$name."! it's nice to meet you :)\n";
        $chat = readline(prompt: "do you want to continue the chat?(y/n) ");
    }
    echo "Bye bye ".$name." :)";
}
else {
    echo "OK, see you later :)";
}