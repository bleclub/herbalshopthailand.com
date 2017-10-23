<?php
date_default_timezone_set("Asia/Bangkok"); 
session_start();
/*
 * include file start
 */
require 'lib/core.php';
require 'lib/cons.php';
require 'lib/database.php';
require 'lib/security.php';
require 'lib/thaidate.php';

$baseUrl = base_url();
$basePath = base_path();
$lang = lang_path();

$onpage = isset($_GET['onpage']) ? $_GET['onpage'] : "front";
$url = isset($_GET['url']) ? $_GET['url'] : "home";
$a = isset($_GET['a']) ? $_GET['a'] : "index";

/*
 * logical programming
 */
if ($onpage == "back" AND $a != "login") {
    $security = new security();
    $security->check("admin");
}

if (file_exists("application/" . $onpage . "/" . $url . "/" . $a . ".php")) {
    require ("application/" . $onpage . "/" . $url . "/" . $a . ".php");
} else {
    header('location:' . $baseUrl);
}
