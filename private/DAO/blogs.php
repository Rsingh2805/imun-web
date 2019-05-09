<?php

require_once(dirname(__FILE__).'/database_api.php');

class Blog{
    public static function createBlog($image, $subject, $posted_by, $date, $content_1, $content_2, $content_3, $content_4, $content_5){
        $db = new DBConn();
        $conn = $db->connection();

        $sql = "INSERT INTO `blogs` (`image`, `subject`, `posted_by`, `date`, `content_1`, `content_2`, `content_3`, `content_4`, `content_5`) VALUES (:image, :subject, :posted_by, :date, :content_1, :content_2, :content_3, :content_4, :content_5);";
        try {
            $stmt = $conn->prepare($sql);
            $stmt->execute(array(
                ":image" => $image,
                ":subject" => $subject,
                ":posted_by" => $posted_by,
                ":date" => $date,
                ":content_1" => $content_1,
                ":content_2" => $content_2,
                ":content_3" => $content_3,
                ":content_4" => $content_4,
                ":content_5" => $content_5
            ));
            return true;
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