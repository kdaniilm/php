<?php
    session_start();
    if(!$_SESSION["IsAutorize"]){
        echo("<h3 style='background-color: red;'>You didn't autorize!!!</h3>");        
    }
    else{
        echo("Upload");
    }
?>