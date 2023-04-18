<?php
function echo_msg(){
    $msg = readline(prompt: "message: ");
    echo "Message function wrote: ".$msg;
}

echo_msg();