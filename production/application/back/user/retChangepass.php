<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new database();
    $option_uw = array(
        "table" => "bt_user",
        "fields" => "password",
        "condition" => "id='{$_POST['id']}'"
    );
    $query_uw = $db->select($option_uw);
    $rs_uw = $db->get($query_uw);
    if ($rs_uw['password'] == trim(salt_pass($_POST['oldpass']))) {
        $value_pw = array(
            "password" => trim(salt_pass($_POST['newpassword']))
        );
        $query_pw = $db->update("bt_user", $value_pw, "id='{$_POST['id']}'");

        if ($query_pw == TRUE) {
				/*Log file*/
			$value_log = array(
				"log_type" => 'User',
				"log_typeID" => $_POST['id'],
				"log_detail" => 'แก้ไข password',
				"log_date" => date('Y-m-d H:i:s'),
				"log_ip" => $_SERVER["REMOTE_ADDR"],
				"log_user" => $_SESSION[_ss . 'username'] ,
				"log_user_id" => $_SESSION[_ss . 'id']
			);
			$query_log = $db->insert("bt_loginfo", $value_log);
			$_SESSION[_ss . 'msg_result'] = "changepass";
            header("location:" . $baseUrl . "/back/user/changepass");
        }
    }
    mysql_close();
}