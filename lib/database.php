<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/init.php");

class Database {
    private static $db;

    public function __construct() {
        self::$db = new mysqli(Config::database()["host"], Config::database()["username"], Config::database()["password"], Config::database()["name"]);
        self::$db->set_charset("utf8");
    }

    public static function call($query, $type = 0) {
        $result = self::$db->query($query);
        
        if ($result === false) {
            return false;
        }
        
        switch($type){
            case 0:
                return $result;
            case 1:
                return $result->fetch_array(MYSQLI_ASSOC);
            default:
                return $result;
        }
    }
}