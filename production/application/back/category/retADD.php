<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new database();

	//$pwd = trim(salt_pass($_POST['password']));
    $value_ns = array(
		"category_name_th" => trim($_POST['category_name_th']),
		"category_name_en" => trim($_POST['category_name_en']),
		"category_type" => trim($_POST['category_type']),
		"category_status" => trim($_POST['category_status']),
        "category_datecreate" => date('Y-m-d H:i:s'),
		"userID" => $_SESSION[_ss . 'id'],
		
    );
    $query_pd = $db->insert("bt_category", $value_ns);

    if ($query_pd == TRUE) {
		/*Log file*/
			$value_log = array(
				"log_type" => 'Career',
				"log_typeID" => $db->insert_id(),
				"log_detail" => 'เพิ่มหมวดหมู๋ - '.$_POST['category_name_th'],
				"log_date" => date('Y-m-d H:i:s'),
				"log_ip" => $_SERVER["REMOTE_ADDR"],
				"log_user" => $_SESSION[_ss . 'username'] ,
				"log_user_id" => $_SESSION[_ss . 'id']
			);
			$query_log = $db->insert("bt_loginfo", $value_log);
			$_SESSION[_ss . 'msg_result'] = "add";
            
        	header("location:" . $baseUrl . "/back/category");
		
    }
    mysql_close();
}