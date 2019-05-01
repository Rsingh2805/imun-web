<?php
session_start();
ini_set("display_errors", "1");
error_reporting(E_ALL);
ini_set("log_errors", 1);
//exit(dirname(__FILE__).'/../functions/mail.php');
//require dirname(__FILE__).'/../lib/mail/mail.php';
require dirname(__FILE__).'/../DAO/user.php';
//require dirname(__FILE__).'/../functions/mail.php';

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $user = User::login($_POST['username'], $_POST['password']);
    $result = array();
    if ($user == null){
        $result['status'] = 'FAIL';
    }else{
        $_SESSION["user"] = $user['id'];
        $result['status'] = 'PASS';
    }
    $result['user'] = $user;
    echo json_encode($result);
}