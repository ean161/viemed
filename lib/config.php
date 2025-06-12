<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/init.php");

class Config {
    public static function database() {
        return [
            "host" =>  "localhost",
            "username" =>  "viemed_main",
            "password" =>  "viemed_main@",
            "name" =>  "viemed_main"
        ];
    }
}