<?php

$db = new database();

/*Log file*/
$value_log = array(
	"login_user" => $_SESSION[_ss . 'username'],
	"login_date" => date('Y-m-d H:i:s'),
	"login_password" => "Logout",
	"login_ip" => $_SERVER["REMOTE_ADDR"],
	"login_status" => 'true'
);
$query_log = $db->insert("bt_userlog", $value_log); 

unset($_SESSION[_ss . 'username']);
unset($_SESSION[_ss . 'id']);
unset($_SESSION[_ss . 'fullname']);
unset($_SESSION[_ss . 'officeID']);
unset($_SESSION[_ss . 'officeShort']);
unset($_SESSION[_ss . 'userID']);
unset($_SESSION[_ss . 'profilePic']);
unset($_SESSION[_ss . 'levelaccess']);

header('location:'.$baseUrl.'/cms');

			