<?php
    chdir(dirname(__FILE__));

    function registeredSuccessfullyMail($email, $fullname, $registration_id){
        exec("php exec-register.php ".escapeshellarg($email)." ".escapeshellarg($fullname)." ".escapeshellarg($registration_id)." > /dev/null &");
    }
    function applicationAcceptedMail($email, $fullname, $nationality){
        exec("php exec-accept.php ".escapeshellarg($email)." ".escapeshellarg($fullname)." ".escapeshellarg($nationality)." > /dev/null &");
    }
    function sendNewsletter($emails, $file, $message, $subject){
        $command = "php exec-newsletter.php ".escapeshellarg($emails)." ".escapeshellarg($message)." ".escapeshellarg($subject)." ".escapeshellarg($file)." > /dev/null &";
        exec($command);
    }
    function paymentPendingMail($email, $fullname){
        exec("php exec-payment-pending.php ".escapeshellarg($email)." ".escapeshellarg($fullname)." > /dev/null &");
    }
    function applicationRejectedMail($email, $fullname){
        exec("php exec-rejection.php ".escapeshellarg($email)." ".escapeshellarg($fullname)." > /dev/null &");
    }
    function sendDelegateLetter($emails, $file, $message, $subject){
        $command = "php exec-delegate.php ".escapeshellarg($emails)." ".escapeshellarg($message)." ".escapeshellarg($subject)." ".escapeshellarg($file)." > /dev/null &";
        exec($command);
    }