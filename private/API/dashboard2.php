<?php
session_start();
ini_set("display_errors", "1");
error_reporting(E_ALL);
ini_set("log_errors", 1);
//exit(dirname(__FILE__).'/../functions/mail.php');
//require dirname(__FILE__).'/../lib/mail/mail.php';
require dirname(__FILE__).'/../DAO/application.php';
//require dirname(__FILE__).'/../functions/mail.php';

$result = array();

if (!isset($_SESSION['user'])){
    $result['status'] = 'NA';
    echo json_encode($result);
}else{
    if ($_SERVER['REQUEST_METHOD']=='GET'){
        $application = Application::getApplications_accepted();
        echo json_encode($application);
    }
}