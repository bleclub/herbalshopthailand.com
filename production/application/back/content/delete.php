<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();

if($_GET['status'] == 'contact') {
$option_pw = array(
		"table" => "btview_content",
		"condition" => "content_id='{$_GET['id']}'"
 ); 
$query_pw = $db->select($option_pw);
$rs_pw = $db->get($query_pw);
$query_map = $db->delete("bt_gmap", "officeID='{$rs_pw['officeID']}'");
}
$query = $db->delete("bt_content", "content_id='{$_GET['id']}'");
if($query == TRUE){
		/*Log file*/
		$value_log = array(
			"log_type" => 'Content',
			"log_typeID" => $_GET['id'],
			"log_detail" => 'ลบ '.$_GET['status'],
			"log_date" => date('Y-m-d H:i:s'),
			"log_ip" => $_SERVER["REMOTE_ADDR"],
			"log_user" => $_SESSION[_ss . 'username'] ,
			"log_user_id" => $_SESSION[_ss . 'id']
		);
		$query_log = $db->insert("bt_loginfo", $value_log); 
		$_SESSION[_ss . 'msg_result'] = "delete";
	
    header("location:" . $baseUrl . "/back/content/list/".$_GET['status']);
}else{
    echo "error";
}
mysql_close();