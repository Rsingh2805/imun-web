<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
ini_set("log_errors", 1);
ini_set("error_log", "error.log");
error_log( "Hello, errors!" );
//exit(dirname(__FILE__).'/../functions/mail.php');
require_once dirname(__FILE__) . '/../lib/mail/mail.php';

//require dirname(__FILE__).'/../functions/mail.php';

if ($_SERVER['REQUEST_METHOD']=='GET'){
    $applications = Application::getApplications();
    echo json_encode($applications);
}else if($_SERVER['REQUEST_METHOD']=='POST'){
    switch ($_POST["req"]){
        case "send":
         
            $fullname = $_POST['name'];
           
            $email = $_POST['email'];
          

           
           $mail= registeredSuccessfullyMail($email, $fullname);
        
        
            echo($mail) ;
            break;}
    }
