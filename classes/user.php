<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/init.php");

class User {
    private static $user;
    
    public function __construct() {
        self::$user = Database::call("SELECT * FROM `account` WHERE `token` = '".$_COOKIE["token"]."'", 1);
    }
    
    public static function isLogged() {
        return (self::$user["id"] >= 1);
    }
    
    public static function getInfo($field) {
        return self::$user[$field];
    }

    public static function logout() {
        Database::call("UPDATE `account` SET `token` = '".md5(time()."@".time()."@".time()."@".rand(1, 9999999))."_logout' WHERE `id` = '".self::getInfo("id")."'");
        unset($_COOKIE["token"]);
    }

}