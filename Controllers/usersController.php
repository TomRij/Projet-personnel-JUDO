<?php

$uri = $_SERVER["REQUEST_URI"];

if($uri == "/connexion"){
    require_once "Templates/Users/connexion";
}elseif($uri == "/inscription"){
    require_once "Templates/Users/inscription.php";
}