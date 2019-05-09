<?php

require_once(dirname(__FILE__) . '/database_api.php');

class News{
    public static function createNews($filename, $title, $link, $content){
        $db = new DBConn();
        $conn = $db->connection();

        $sql = "INSERT INTO `news` (`image`, `subject`, `content`, `url`) VALUES (:image, :subject, :content, :url);";
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute(array(
                ':image' => $filename,
                ':subject' => $title,
                ':content' => $content,
                ':url' => $link
            ));
            return true;
        }catch (PDOException $e){
            echo $sql."<br>".$e->getMessage();
            return false;
        }
    }

    public static function getNews($id=null){
        $db = new DBConn();
        $conn = $db->connection();
        $sql = "SELECT * FROM news";
        if ($id){
            $sql .= " WHERE `id`=$id";
        }
        $stmt = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $stmt;
    }

    public static function deleteNews($id){
        $db = new DBConn();
        $conn = $db->connection();
        try {
            $sql = "DELETE FROM `news` WHERE `id`='$id'";
            $conn->exec($sql);
            return true;
        }catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}