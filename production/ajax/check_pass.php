<?php
	include '../lib/core.php';	
	include('../lib/database.php');
  	$db = new database();
	if(isset($_POST["password"]))
	{	
		$db = new database();
		$pwd = salt_pass($_POST['password']);
		$userid = $_POST['userid'];
		if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
			die();
		}
		$password = filter_var($pwd, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	   
		$option_pw = array(
			"table" => "bt_user",
			"condition" => "id='{$userid}' AND password='{$password}'"
    	);
		$query_pw = $db->select($option_pw);	
		$rw_pw = $db->rows($query_pw);
		if($rw_pw > 0){
			die('<span style="color:green"><i class="fa fa-check"></i> Old password is correct.</span>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="New Password" name="newpassword" id="newpass">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Confirm Password" name="confirmpasswod" onchange="showButton()">
			</div>');
		}else{
			die('<span style="color:red"><i class="fa fa-close"></i> Old password is not correct</span>');
		}
	}
	
?>