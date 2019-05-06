<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
ini_set("log_errors", 1);
ini_set("error_log", "error.log");
error_log( "Hello, errors!" );
//exit(dirname(__FILE__).'/../functions/mail.php');
require_once dirname(__FILE__).'/../lib/mail/mail-handler.php';
require_once dirname(__FILE__).'/../DAO/application.php';

require_once dirname(__FILE__).'/../DAO/database_api.php';
//require dirname(__FILE__).'/../functions/mail.php';

if ($_SERVER['REQUEST_METHOD']=='GET'){
    $applications = Application::getApplications();
    echo json_encode($applications);
}else if($_SERVER['REQUEST_METHOD']=='POST'){
    switch ($_POST["req"]){
        case "create":
            $location = $_POST['location'];
            $fullname = $_POST['fullname'];
            $sex = $_POST['sex'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $nationality = $_POST['nationality'];
            $residence = $_POST['residence'];
            $enrolled_as = $_POST['enrolled_as'];
            $field_of_study = $_POST['field_of_study'];
            $univ_name = $_POST['univ_name'];
            $food_preference = $_POST['food_preference'];
            $tshirt_size = $_POST['tshirt_size'];
            $funded_by = $_POST['funded_by'];
            $known_from = $_POST['known_from'];
            $prev_experience = $_POST['prev_experience'];
            $referral_code = $_POST['referral_code'];
            $motivation_letter = $_POST['motivation_letter'];
            $promo= $_POST['promo'];

               $db = new DBConn();
        $conn = $db->connection();

        $sql = "SELECT * FROM `application` WHERE `email`='$email' ";
         $stmt = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
       
        if ($stmt != null) {
           $data =  array(
               "status" => "EXIST",
               "id" => strtoupper(substr($stmt["conference_location"], 0, 3)).str_pad(strval($stmt['id']), 6, '0', STR_PAD_LEFT)
           );
        
            echo json_encode($data) ;
            break;
        }else{

            $stmt = Application::createApplication($location, $fullname, $sex, $dob, $email, $nationality, $residence, $enrolled_as, $field_of_study, $univ_name, $food_preference, $tshirt_size, $funded_by, $known_from, $prev_experience, $referral_code, $motivation_letter,$promo);
            $data = array(
                "name"=>$fullname,
                "email"=>$email,
                "status" => "SUCCESS",
                "id" => strtoupper(substr($stmt["conference_location"], 0, 3)).str_pad(strval($stmt['id']), 6, '0', STR_PAD_LEFT)
            );
       
         
            echo json_encode($data);
            break;}
        case "accept":
            $id = $_POST["id"];
            $result = Application::acceptApplication($id);
            if($result==true){
                $app = Application::getApplications($id);
                $data = array(
                    "status" => "SUCCESS"
                );
                $mail = applicationAcceptedMail($app[0]["email"], $app[0]["full_name"], $app[0]["nationality"]);
            }else{
                $data = array(
                    "status" => "ERROR",
                    "data" => $result
                );
            }
            echo json_encode($data);
            break;
        case "reject":
            $id = $_POST["id"];
            $result = Application::rejectApplication($id);
            if($result==true){
                $data = array(
                    "status" => "SUCCESS"
                );
            }else{
                $data = array(
                    "status" => "ERROR",
                    "data" => $result
                );
            }
            echo json_encode($data);
            break;
        case "loa":
            $id = $_POST["id"];
            $app = Application::getApplications($id);
            $data = array(
                "status" => "SUCCESS"
            );
            applicationAcceptedMail($app[0]["email"], $app[0]["first_name"], $app[0]["last_name"], $app[0]["nationality"]);
            echo json_encode($data);
            break;
        case "status":
            $id = $_POST["id"];
            $dob = $_POST["dob"];

            $app = Application::getStatus($id, $dob);
            echo json_encode($app);
            break;
        default:
            break;
    }
};