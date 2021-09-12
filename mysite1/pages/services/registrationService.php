<?php
    $userDb = "./db/users.txt";
    function Registration($login, $password, $confirmPassword){
        $log = trim(htmlspecialchars($login));
        $pass = trim(htmlspecialchars($password));
        $confirmPass = trim(htmlspecialchars($confirmPassword));
        if($log == '' || $pass == ''){
            echo "<h3><span style='color:red'> FILL ALL Required Fields </span></h3>";
            return false;
        }
        if(strlen($log)< 3 || strlen($log) > 30 || strlen($pass) < 3 || strlen($pass) > 30 || strlen($confirmPass) < 3 || strlen($confirmPass) > 30) {
            echo "<h3><span style='color:red'> Value lenght must be between 3 - 30 </span></h3>";
            return false;
        }
        if($pass != $confirmPass){
            echo "<h3><span style='color:red'>Password not confirmed</span></h3>";
            return false;
        }
        global $userDb;
        $file = fopen($userDb, "a+");

        while($user = fgets($file, 128)){
            $readName = substr($user, 0, strpos($user, ':'));
            if($readName == $log){
                echo "<h3><span style='color:red'> This login allready exist!!! </span></h3>";
                return false;
            }
        }

        $user = "$log:".md5($pass)."\r\n";
        fputs($file, $user);
        fclose($file);

        return true;
    }
?>