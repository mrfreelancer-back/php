<?php
session_start();

$_SESSION["is_logged_in"] = true;

echo "user logged in successfully";