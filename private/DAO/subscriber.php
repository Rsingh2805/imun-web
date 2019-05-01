<?php

require_once(dirname(__FILE__).'/database_api.php');

class Subscriber{
    public static function createSubscriber($email){
        $db = new DBConn();
        $conn = $db->connection();

        $sql = "INSERT INTO `subscriber` (`email`) VALUES (:email);";
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute(array(
                ':email' => $email
            ));
        }catch (PDOException $e){
            echo $sql."<br>".$e->getMessage();
        }
    }
}