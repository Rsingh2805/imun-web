<?php
    chdir(dirname(__FILE__));

    function registeredSuccessfullyMail($email, $fullname){
        exec("php exec-register.php ".escapeshellarg($email)." ".escapeshellarg($fullname)." > /dev/null &");
    }
    function applicationAcceptedMail($email, $fullname, $nationality){
        exec("php exec-accept.php ".escapeshellarg($email)." ".escapeshellarg($fullname)." ".escapeshellarg($nationality)." > /dev/null &");
    }