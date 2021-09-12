<?php
    $userDb = "./db/users.txt";
    session_start();

    function Login($login, $password){
        $log = trim(htmlspecialchars($login));
        $pass = trim(htmlspecialchars($password));

        global $userDb;
        $file = fopen($userDb, "a+");

        while($user = fgets($file, 128)){
            $readName = substr($user, 0, strpos($user, ':'));
            if($readName == $log){
                $readPass = substr($user, strpos($user, ':'), strlen($user));
                if(md5($pass) == $readPass){
                    $_SESSION["IsAutorize"] = true;
                    echo("<h3 style='background-color: green;'>Loggined</h3>");
                    return true;
                }
            }
        }
        echo("Not found user $log");
        return false;
    }
?>