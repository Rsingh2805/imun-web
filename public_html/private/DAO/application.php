<?php

require_once(dirname(__FILE__) . '/database_api.php');
class Application{
    public static function getApplications($id=null){
        $db = new DBConn();
        $conn = $db->connection();
        $sql = "SELECT * FROM application";
        if ($id){
            $sql .= " WHERE `id`=$id ";
        }
        $stmt = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }
    public static function getApplications_pending($id=null){
        $db = new DBConn();
        $conn = $db->connection();
        $sql = "SELECT * FROM application WHERE `status`='PENDING'";
        if ($id){
            $sql .= " WHERE `id`=$id ";
        }
        $stmt = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }
    public static function getApplications_accepted($id=null){
        $db = new DBConn();
        $conn = $db->connection();
        $sql = "SELECT * FROM application WHERE `status`='ACCEPTED' AND `payment`='PENDING'";
        if ($id){
            $sql .= " WHERE `id`=$id ";
        }
        $stmt = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }
    public static function getApplications_rejected($id=null){
        $db = new DBConn();
        $conn = $db->connection();
        $sql = "SELECT * FROM application WHERE `status`='REJECTED'";
        if ($id){
            $sql .= " WHERE `id`=$id ";
        }
        $stmt = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }
    public static function getApplications_fixed_delegates($id=null){
        $db = new DBConn();
        $conn = $db->connection();
        $sql = "SELECT * FROM application WHERE `status`='ACCEPTED' AND `payment`='PAID'";
        if ($id){
            $sql .= " WHERE `id`=$id ";
        }
        $stmt = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }

    public static function createApplication($location, $fullname, $sex, $dob, $email, $nationality, $residence, $enrolled_as, $field_of_study, $univ_name, $food_preference, $tshirt_size, $funded_by, $known_from, $prev_experience, $referral_code, $motivation_letter,$promo){
        $db = new DBConn();
        $conn = $db->connection();

        $sql = "INSERT INTO `application` (`conference_location`, `full_name`, `sex`, `dob`, `email`, `nationality`, `residence_country`, `enrolled_as`, `field_of_study`, `univ_name`, `food_preference`, `tshirt_size`, `funded_by`, `known_from`, `prev_experience`, `referral_code`, `motivation_letter`, `status`,`promo`) VALUES (:location, :fullname, :sex, :dob, :email, :nationality, :residence, :enrolled_as, :field_of_study, :univ_name, :food_preference, :tshirt_size, :funded_by, :known_from, :prev_experience, :referral_code, :motivation_letter, :status,:promo);";
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute(array(
                ':location' => $location,
                ':fullname' => $fullname,
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
                 ':promo' => $promo,
                ':status' => 'PENDING'
            ));
            $sql = "SELECT * FROM `application` WHERE `email`='$email' ";
            $stmt = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
            return $stmt;
        }catch (PDOException $e){
            echo $sql."<br>".$e->getMessage();
        }
    }

    public static function acceptApplication($id){
        $db = new DBConn();
        $conn = $db->connection();
        $sql = "UPDATE `application` SET `status`='ACCEPTED' WHERE `id`='$id'";
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
        $sql = "UPDATE `application` SET `status`='REJECTED' WHERE `id`='$id'";
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

    public static function confirmApplication($id){
        $db = new DBConn();
        $conn = $db->connection();
        $sql = "UPDATE `application` SET `payment`='PAID' WHERE `id`='$id'";
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

    public static function getStatus($id, $dob){
        $db = new DBConn();
        $conn = $db->connection();
        $sql = "SELECT status FROM `application` WHERE `id`='$id' AND `dob`='$dob'";
        $stmt = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $stmt;
    }

    public static function deleteApplications($ids){
        $db = new DBConn();
        $conn = $db->connection();

        try {
            foreach ($ids as $id){
                $sql = "DELETE FROM `application` WHERE `id`='$id'";
                $conn->exec($sql);
            }
            return true;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}