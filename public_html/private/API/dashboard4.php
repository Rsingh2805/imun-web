<?php
session_start();
ini_set("display_errors", "1");
error_reporting(E_ALL);
ini_set("log_errors", 1);
//exit(dirname(__FILE__).'/../functions/mail.php');
//require dirname(__FILE__).'/../lib/mail/mail.php';
require dirname(__FILE__) . '/../DAO/application.php';
require_once dirname(__FILE__) . '/../lib/mail/mail-handler.php';
//require dirname(__FILE__).'/../functions/mail.php';

$result = array();

if (!isset($_SESSION['user'])){
    $result['status'] = 'NA';
    echo json_encode($result);
}else{
    if ($_SERVER['REQUEST_METHOD']=='GET'){
        $application = Application::getApplications_fixed_delegates();
        echo json_encode($application);
    }else if($_SERVER['REQUEST_METHOD']=='POST'){
        switch ($_POST["req"]){
            case "send-mail":
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
                    $email = Application::getApplications($id)[0]['email'];
                    array_push($emails, $email);

                }
                sendDelegateLetter(json_encode($emails), $filename, $message, $subject);
                $data = array("status" => "SUCCESS");
                echo json_encode($data);
                break;
                break;
        }
    }
}