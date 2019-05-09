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
        case "delete":
            $ids = json_decode($_POST['id']);
            foreach ($ids as $id){
                $data = Blog::deleteBlog($id);
            }
            if ($data===true){
                $data = array("status" => "SUCCESS");
            }else{
                $data = array("status" => "ERROR");
            }
            echo json_encode($data);
            break;
        default:
            $data = array(
                "status" => "INV"
            );
            echo json_encode($data);
            break;
    }
};