<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();

$option_im = array(
	"table" => "bt_pages",
	"fields" => "pages_subject_th",
	"condition" => "pages_id='{$_GET['id']}'"
);
$query_im = $db->select($option_im);
$rs_im = $db->get($query_im);

$query = $db->delete("bt_pages", "pages_id='{$_GET['id']}'");

if($query == TRUE){
		/*Log file*/
		$value_log = array(
			"log_type" => 'Career',
			"log_typeID" => $_GET['id'],
			"log_detail" => 'ลบตำแหน่งงาน - '.$rs_im['pages_subject_th'],
			"log_date" => date('Y-m-d H:i:s'),
			"log_ip" => $_SERVER["REMOTE_ADDR"],
			"log_user" => $_SESSION[_ss . 'username'] ,
			"log_user_id" => $_SESSION[_ss . 'id']
		);
		$query_log = $db->insert("bt_loginfo", $value_log); 
		$_SESSION[_ss . 'msg_result'] = "delete";
	
		header("location:" . $baseUrl . "/back/career");
	
}else{
    echo "error";
}
mysql_close();