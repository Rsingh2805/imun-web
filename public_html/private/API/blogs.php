<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
ini_set("log_errors", 1);
ini_set("error_log", "error.log");
error_log( "Hello, errors!" );
require_once dirname(__FILE__) . '/../DAO/blogs.php';
require_once dirname(__FILE__) . '/../lib/mail/mail-handler.php';

if ($_SERVER['REQUEST_METHOD']=='GET'){
    $blogs = Blog::getBlogs();
    echo json_encode($blogs);
}else if($_SERVER['REQUEST_METHOD']=='POST'){
    switch ($_POST["req"]){
        case "create":
            $data = array();
            if (isset($_FILES['file']['name'])){
                $filename = $_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], dirname(__FILE__).'/../../images/blog/' . $_FILES['file']['name']);
                $data['error'] = $_FILES['file']['error'];
            }else{
                $filename="";
            }
            $stmt = Blog::createBlog($filename, $_POST['title'], $_POST['author'], $_POST['date'], $_POST['para1'], $_POST['para2'], $_POST['para3'], $_POST['para4'], $_POST['para5']);
            if($stmt){
                $data["status"] = "SUCCESS";
            }else{
                $data["status"] = "ERROR";
            }
            echo json_encode($data);
            break;
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