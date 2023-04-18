<?php
class HiBye{
    public static function sayHi(){
        return "Hi! how're you? baby :)\n";
    }

    public static function greet($nm){
        return "Hello ".$nm."! :)";
    }
}

echo HiBye::sayHi();
echo HiBye::greet(nm: "ali");