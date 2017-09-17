<?php
require "lib/uploadimg.php";
$db = new database();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if($_POST['content_id'] == ""){
		//$pwd = trim(salt_pass($_POST['password']));
		
		$value_content = array(
			"content_categories" => trim($_POST['content_categories']),
			"content_subject_th" => trim($_POST['content_subject_th']),
			"content_subject_en" => trim($_POST['content_subject_en']),
			"content_detail_th" => str_replace('\"', '"', $_POST['content_detail_th']),
			"content_detail_en" => str_replace('\"', '"', $_POST['content_detail_en']),
			"content_createdate" => date('Y-m-d H:i:s'),
			"content_lastupdate" => date('Y-m-d H:i:s'),
			"content_link" => trim($_POST['content_link']),	
			"officeID" => trim($_POST['officeID']),
			"userID" => $_SESSION[_ss . 'id']
			
		);
		$query_content = $db->insert("bt_content", $value_content);
		
		if($_POST['content_categories'] == 'contact'){
			$value_map = array(
				"gmap_code" => trim($_POST['gmap_code']),
				"officeID" => trim($_POST['officeID'])
			);
			
			$query_gmap = $db->insert("bt_gmap", $value_map);
		}
		
		if ($query_content == TRUE) {
		/*Log file*/
			$value_log = array(
				"log_type" => 'Content',
				"log_typeID" => $db->insert_id(),
				"log_detail" => 'แก้ไข '.$_POST['content_subject_th'],
				"log_date" => date('Y-m-d H:i:s'),
				"log_ip" => $_SERVER["REMOTE_ADDR"],
				"log_user" => $_SESSION[_ss . 'username'] ,
				"log_user_id" => $_SESSION[_ss . 'id']
			);
			$query_log = $db->insert("bt_loginfo", $value_log);
			$_SESSION[_ss . 'msg_result'] = "edit"; 
			header("location:" . $baseUrl . "/back/content/index/".$_POST['content_categories']);	
    }
		
	} else { 
		//$pwd = trim(salt_pass($_POST['password']));
		$value_content = array(
			"content_categories" => trim($_POST['content_categories']),
			"content_subject_th" => trim($_POST['content_subject_th']),
			"content_subject_en" => trim($_POST['content_subject_en']),
			"content_detail_th" => str_replace('\"', '"', $_POST['content_detail_th']),
			"content_detail_en" => str_replace('\"', '"', $_POST['content_detail_en']),
			"content_createdate" => date('Y-m-d H:i:s'),
			"content_lastupdate" => date('Y-m-d H:i:s'),
			"content_link" => trim($_POST['content_link']),	
			"officeID" => trim($_POST['officeID']),
			"userID" => $_SESSION[_ss . 'id']
			
		);
		$query_content = $db->update("bt_content", $value_content, "content_id='{$_POST['content_id']}'");
		
		if($_POST['content_categories'] == 'contact'){
			$value_map = array(
				"gmap_code" => trim($_POST['gmap_code'])
			);
			
			$query_gmap = $db->update("bt_gmap", $value_map, "officeID='{$_POST['officeID']}'");
		}
		
		
		if ($query_content == TRUE) {
			/*Log file*/
				$value_log = array(
					"log_type" => 'Content',
					"log_typeID" => $_POST['content_id'],
					"log_detail" => 'แก้ไข '.$_POST['content_subject_th'],
					"log_date" => date('Y-m-d H:i:s'),
					"log_ip" => $_SERVER["REMOTE_ADDR"],
					"log_user" => $_SESSION[_ss . 'username'] ,
					"log_user_id" => $_SESSION[_ss . 'id']
				);
				$query_log = $db->insert("bt_loginfo", $value_log);
				$_SESSION[_ss . 'msg_result'] = "edit"; 
				header("location:" . $baseUrl . "/back/content/index/".$_POST['content_categories']);	
		}
	}
    mysql_close();
}