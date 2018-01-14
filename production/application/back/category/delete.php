<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();

$option_im = array(
	"table" => "bt_category",
	"fields" => "category_name_th",
	"condition" => "category_id='{$_GET['id']}'"
);
$query_im = $db->select($option_im);
$rs_im = $db->get($query_im);

$query = $db->delete("bt_category", "category_id='{$_GET['id']}'");

if($query == TRUE){
		/*Log file*/
		$value_log = array(
			"log_type" => 'category',
			"log_typeID" => $_GET['id'],
			"log_detail" => 'ลบหมวดหมู่ - '.$rs_im['category_name_th'],
			"log_date" => date('Y-m-d H:i:s'),
			"log_ip" => $_SERVER["REMOTE_ADDR"],
			"log_user" => $_SESSION[_ss . 'username'] ,
			"log_user_id" => $_SESSION[_ss . 'id']
		);
		$query_log = $db->insert("bt_loginfo", $value_log); 
		$_SESSION[_ss . 'msg_result'] = "delete";
	
		header("location:" . $baseUrl . "/back/category");
	
}else{
    echo "error";
}
mysql_close();