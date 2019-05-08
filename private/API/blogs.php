<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
ini_set("log_errors", 1);
ini_set("error_log", "error.log");
error_log( "Hello, errors!" );
require_once dirname(__FILE__).'/../DAO/blogs.php';
require_once dirname(__FILE__).'/../lib/mail/mail-handler.php';

if ($_SERVER['REQUEST_METHOD']=='GET'){
    $blogs = Blog::getBlogs();
    echo json_encode($blogs);
}else if($_SERVER['REQUEST_METHOD']=='POST'){
    switch ($_POST["req"]){
        default:
            $data = array(
                "status" => "INV"
            );
            echo json_encode($data);
            break;
    }
};