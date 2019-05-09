<?php

require_once(dirname(__FILE__).'/database_api.php');

class Blog{
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

    public static function getBlogs($id=null){
        $db = new DBConn();
        $conn = $db->connection();
        $sql = "SELECT * FROM blogs";
        if ($id){
            $sql .= " WHERE `id`=$id";
        }
        $stmt = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }

    public static function deleteBlog($id)
    {
        $db = new DBConn();
        $conn = $db->connection();
        try {
            $sql = "DELETE FROM `blogs` WHERE `id`='$id'";
            $conn->exec($sql);
            return true;
        }catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}