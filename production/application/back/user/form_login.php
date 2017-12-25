<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new database();
    $password = salt_pass($_POST['password']);
    $option_pw = array(
        "table" => "btview_user",
        "fields" => "id,username,userType,officeID,userID,officeShortname,profilePicture,firstnameEN, lastnameEN",
        "condition" => "username='{$_POST['username']}' AND password='{$password}'"
    );
    $query_pw = $db->select($option_pw);
    $rows_pw = $db->rows($query_pw);
    if ($rows_pw == 1) {
        $rs_pw = $db->get($query_pw);
        $_SESSION[_ss . 'username'] = $rs_pw['username'];
        $_SESSION[_ss . 'id'] = $rs_pw['id'];
		$_SESSION[_ss . 'fullname'] = $rs_pw['firstnameEN']." ".$rs_pw['lastnameEN'];
		// $_SESSION[_ss . 'officeID'] = $rs_pw['officeID'];
		$_SESSION[_ss . 'officeID'] = '1200';
		$_SESSION[_ss . 'officeShort'] = $rs_pw['officeShortname'];
		$_SESSION[_ss . 'userID'] = $rs_pw['userID'];
		$_SESSION[_ss . 'profilePic'] = $rs_pw['profilePicture'];
        $_SESSION[_ss . 'levelaccess'] = $rs_pw['userType'];
		
		/*Log file*/
			$value_log = array(
				"login_user" => $_POST['username'],
				"login_password" => $password,
				"login_date" => date('Y-m-d H:i:s'),
				"login_ip" => $_SERVER["REMOTE_ADDR"],
				"login_status" => 'true'
			);
			$query_log = $db->insert("bt_userlog", $value_log); 
		
        header('location:'.$baseUrl.'/back/home/index');
    }else{
		$_SESSION[_ss . 'msg_result'] = TRUE;
		/*Log file*/
			$value_log = array(
				"login_user" => $_POST['username'],
				"login_password" => $password,
				"login_date" => date('Y-m-d H:i:s'),
				"login_ip" => $_SERVER["REMOTE_ADDR"],
				"login_status" => 'false'
			);
			$query_log = $db->insert("bt_userlog", $value_log); 
        header('location:'.$baseUrl.'/back/user/login');
    }
    mysql_close();
}