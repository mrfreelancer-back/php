<?php
session_start();

if (isset($_SESSIO["count"])){
    $_SESSION["count"] += 1;
}
else{
    $_SESSION["count"] = 0;
}

var_dump($_SESSION["count"]);