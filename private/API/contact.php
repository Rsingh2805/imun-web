<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
ini_set("log_errors", 1);
ini_set("error_log", "error.log");
error_log( "Hello, errors!" );
require_once dirname(__FILE__).'/../lib/mail/mail.php';

if ($_SERVER['REQUEST_METHOD']=='GET'){
    $result = array(
        "status"=> "INV"
    );
}else if($_SERVER['REQUEST_METHOD']=='POST'){
    switch ($_POST["req"]){
        case "addCon":
            $email = $_POST['email'];
             $fullname = $_POST['name'];
              $subject = $_POST['subject'];
               $message = $_POST['message'];

          $mail= sendContact($email, $fullname,$message,$subject);
            $data = array(
                "status" => $mail
            );
            echo json_encode($data);
            break;
        default:
            break;
    }
};