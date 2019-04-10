<?php

require_once(dirname(__FILE__).'/database_api.php');

class Application{
    public static function getApplications($id=null){
        $db = new DBConn();
        $conn = $db->connection();
        $sql = "SELECT * FROM application";
        if ($id){
            $sql .= " WHERE `id`=$id";
        }
        $stmt = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }

    public static function createApplication($location, $firstname, $middlename, $lastname, $sex, $dob, $email, $nationality, $residence, $enrolled_as, $field_of_study, $univ_name, $food_preference, $tshirt_size, $funded_by, $known_from, $prev_experience, $referral_code, $motivation_letter){
        $db = new DBConn();
        $conn = $db->connection();

        $sql = "INSERT INTO `application` (`conference_location`, `first_name`, `middle_name`, `last_name`, `sex`, `dob`, `email`, `nationality`, `residence_country`, `enrolled_as`, `field_of_study`, `univ_name`, `food_preference`, `tshirt_size`, `funded_by`, `known_from`, `prev_experience`, `referral_code`, `motivation_letter`, `status`) VALUES (:location, :firstname, :middlename, :lastname, :sex, :dob, :email, :nationality, :residence, :enrolled_as, :field_of_study, :univ_name, :food_preference, :tshirt_size, :funded_by, :known_from, :prev_experience, :referral_code, :motivation_letter, :status);";
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute(array(
                ':location' => $location,
                ':firstname' => $firstname,
                ':middlename' => $middlename,
                ':lastname' => $lastname,
                ':sex' => $sex,
                ':dob' => $dob,
                ':email' => $email,
                ':nationality' => $nationality,
                ':residence' => $residence,
                ':enrolled_as' => $enrolled_as,
                ':field_of_study' => $field_of_study,
                ':univ_name' => $univ_name,
                ':food_preference' => $food_preference,
                ':tshirt_size' => $tshirt_size,
                ':funded_by' => $funded_by,
                ':known_from' => $known_from,
                ':prev_experience' => $prev_experience,
                ':referral_code' => $referral_code,
                ':motivation_letter' => $motivation_letter,
                ':status' => 'PEN'
            ));
        }catch (PDOException $e){
            echo $sql."<br>".$e->getMessage();
        }
    }

    public static function acceptApplication($id){
        $db = new DBConn();
        $conn = $db->connection();
        $sql = "UPDATE `application` SET `status`='ACC' WHERE `id`='$id'";
        $stmt = $conn->prepare($sql);
        try {
            $stmt->execute();
            if ($stmt->rowCount()==1){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public static function rejectApplication($id){
        $db = new DBConn();
        $conn = $db->connection();
        $sql = "UPDATE `application` SET `status`='REJ' WHERE `id`='$id'";
        $stmt = $conn->prepare($sql);
        try {
            $stmt->execute();
            if ($stmt->rowCount()==1){
                return true;
            }else{
                return false;
            }
        }catch(PDOException $e){
            return $e->getMessage();
        }

    }
}