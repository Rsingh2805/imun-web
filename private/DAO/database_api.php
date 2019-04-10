<?php

require_once(dirname(__FILE__).'/../config.php');

class DBConn{
    private static $DB, $conn;

    public function __construct()
    {
        if (!isset(self::$DB)){
            self::$DB = $this;
        }
        return self::$DB;
    }

    public function connection()
    {
        if (self::$conn instanceof \PDO){
            return self::$conn;
        }
        try{
            $opts = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES => false);
            self::$conn = new PDO("mysql:host=".CONFIG['db']['host'].";dbname=".CONFIG['db']['database'], CONFIG['db']['username'], CONFIG['db']['password'], $opts);
            return self::$conn;
        }catch (PDOException $e){
            exit($e);
        }
    }

    public function disconnect()
    {
        self::$conn = null;
    }
}
