<?php
interface House{
    function kitchen();
    function yard();
    function pool();
    function bedRooms();
}

class Apartment implements House{
    function kitchen(){
        echo "the kitchen is too small";
    }

    function yard(){
        echo "it has no yard";
    }

    function pool(){
        echo "no fucking way!";
    }

    function bedRooms(){
        $bedRoom = 3;
        echo "it has ".$bedRoom." bed rooms";
    }
}

class PentHouse implements House{
    function kitchen(){
        echo "the kitchen is really big!";
    }

    function yard(){
        echo "a big yard";
    }

    function pool(){
        echo "yes! a good & big one!";
    }

    function bedRooms(){
        $bedRoom = 7;
        echo "it has ".$bedRoom." bed rooms!";
    }
}