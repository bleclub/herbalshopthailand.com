<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new database();

	//$pwd = trim(salt_pass($_POST['password']));
    $value_ns = array(
		"pages_categories" => trim($_POST['pages_categories']),
		"pages_subject_th" => trim($_POST['pages_subject_th']),
		"pages_subject_en" => trim($_POST['pages_subject_en']),
		"pages_title_th" => trim($_POST['pages_title_th']),
		"pages_title_en" => trim($_POST['pages_title_en']),
		"pages_content_th" => trim($_POST['pages_content_th']),
		"pages_content_en" => trim($_POST['pages_content_en']),
		"pages_photoslide" => $image,
		"pages_slide" => trim($_POST['pages_slide']),
		"pages_date" => trim($_POST['pages_date']),	
        "pages_createdate" => date('Y-m-d H:i:s'),
		"pages_lastupdate" => date('Y-m-d H:i:s'),
		"pages_link" => permalink_create($_POST['pages_subject_th']),
		"pages_order" => '0',
		"officeID" => trim($_POST['officeID']),
		"userID" => $_SESSION[_ss . 'id'],
		
    );
    $query_pd = $db->insert("bt_pages", $value_ns);

    if ($query_pd == TRUE) {
		/*Log file*/
			$value_log = array(
				"log_type" => 'Career',
				"log_typeID" => $db->insert_id(),
				"log_detail" => 'เพิ่มตำแหน่งงาน - '.$_POST['pages_subject_th'],
				"log_date" => date('Y-m-d H:i:s'),
				"log_ip" => $_SERVER["REMOTE_ADDR"],
				"log_user" => $_SESSION[_ss . 'username'] ,
				"log_user_id" => $_SESSION[_ss . 'id']
			);
			$query_log = $db->insert("bt_loginfo", $value_log);
			$_SESSION[_ss . 'msg_result'] = "add";
            
        	header("location:" . $baseUrl . "/back/career");
		
    }
    mysql_close();
}