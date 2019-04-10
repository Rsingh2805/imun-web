<?php

require_once(dirname(__FILE__).'/database_api.php');

class User{
    public static function login($username, $password){
        $db = new DBConn();
        $conn = $db->connection();
        $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
        try{
            $stmt = $conn->prepare($sql);
            $stmt->execute(array(
                ':username' => $username,
                ':password' => $password
            ));
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            echo $sql."<br>".$e->getMessage();
        }
        return null;
    }
}