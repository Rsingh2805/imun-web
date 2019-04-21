<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
ini_set("log_errors", 1);
ini_set("error_log", "error.log");
error_log( "Hello, errors!" );
require_once dirname(__FILE__).'/../DAO/subscriber.php';

if ($_SERVER['REQUEST_METHOD']=='GET'){
    $result = array(
        "status"=> "INV"
    );
}else if($_SERVER['REQUEST_METHOD']=='POST'){
    switch ($_POST["req"]){
        case "add":
            $email = $_POST['email'];

            Subscriber::createSubscriber($email);
            $data = array(
                "status" => "SUCCESS"
            );
            echo json_encode($data);
            break;
        default:
            break;
    }
};