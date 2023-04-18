<?php
class Words{
    public static $word = "word";
    public static $word2 = "word2";
}

function wordFunc(){
    echo Words::$word."\n";
}
wordFunc();

function word2Func(){
    echo Words::$word2;
}
word2Func();