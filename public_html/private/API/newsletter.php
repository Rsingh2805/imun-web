<?php
session_start();
ini_set("display_errors", "1");
error_reporting(E_ALL);
ini_set("log_errors", 1);
ini_set("error_log", "error.log");
error_log( "Hello, errors!" );
require_once dirname(__FILE__) . '/../DAO/subscriber.php';
require_once dirname(__FILE__) . '/../lib/mail/mail-handler.php';

if ($_SERVER['REQUEST_METHOD']=='GET'){
    $subscribers = Subscriber::getSubscribers();
    echo json_encode($subscribers);
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
        case "forward":
            $ids = json_decode($_POST['ids']);
            $message = $_POST['message'];
            $subject = $_POST['subject'];
            if (isset($_FILES['file']['name'])) {
                $filename = $_FILES['file']['name'];
                 move_uploaded_file($_FILES['file']['tmp_name'], dirname(__FILE__).'/../lib/mail/uploads/' . $_FILES['file']['name']);
            }else{
                 $filename="";
            }
           
           
            $emails = array();
            foreach ($ids as $id){
                $email = Subscriber::getSubscribers($id)[0]['email'];
                array_push($emails, $email);

            }
            sendNewsLetter(json_encode($emails), $filename, $message, $subject);

            break;
        case "unsubscribe":
            $ids = json_decode($_POST['id']);
            foreach ($ids as $id){
                $data = Subscriber::unsubscribe($id);
            }
            if ($data===true){
                $data = array("status" => "SUCCESS");
            }else{
                $data = array("status" => "ERROR");
            }
            echo json_encode($data);
            break;
        case "print":
            $ids = json_decode($_POST['id']);
            $data = array();
            foreach ($ids as $id){
                $temp = Subscriber::getSubscribers($id)[0];
                array_push($data, $temp);
            }
            $_SESSION['print'] = $data;
            $data = array(
                "status" => "SUCCESS"
            );
            echo json_encode($data);
            break;
        default:
            break;
    }
};