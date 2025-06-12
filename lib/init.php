<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/time.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/config.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/database.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/response.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/function.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/classes/user.php");

$db = new Database();
$time = new Time();
$user = new User();

$file = explode("/", $_SERVER["SCRIPT_NAME"])[count(explode("/", $_SERVER["SCRIPT_NAME"])) - 1];

// if (!str_contains($_SERVER["SCRIPT_NAME"], "unauth")) {
//     if ($file != "login.php" && !User::isLogged()) {
//         header("location: /views/pages/login");
//     } else if (User::isLogged() && $file == "login.php") {
//         header("location: /");
//     }
// }