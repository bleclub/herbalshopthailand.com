<?php
/*
 * php code///////////**********************************************************
 */
$db = new database();

$option_im = array(
	"table" => "bt_news",
	"fields" => "news_photo, news_photoslide",
	"condition" => "news_id='{$_GET['id']}'"
);
$query_im = $db->select($option_im);
$rs_im = $db->get($query_im);
$fullname = $rs_im['firstnameTH']." ".$rs_im['lastnameTH'];
$path = "./upload/event/";
if($rs_im['news_photoslide'] != "news_cms.jpg") {
	// @unlink($path . $rs_im['news_photo']);
	@unlink($path . $rs_im['news_photoslide']);
	// @unlink($path . "thumb_".$rs_im['news_photoslide']);
}


$query = $db->delete("bt_news", "news_id='{$_GET['id']}'");

if($query == TRUE){
		/*Log file*/
		$value_log = array(
			"log_type" => 'Event',
			"log_typeID" => $_GET['id'],
			"log_detail" => 'ลบกิจกรรม',
			"log_date" => date('Y-m-d H:i:s'),
			"log_ip" => $_SERVER["REMOTE_ADDR"],
			"log_user" => $_SESSION[_ss . 'username'] ,
			"log_user_id" => $_SESSION[_ss . 'id']
		);
		$query_log = $db->insert("bt_loginfo", $value_log); 
		$_SESSION[_ss . 'msg_result'] = "delete";
	
		header("location:" . $baseUrl . "/back/event");
	
}else{
    echo "error";
}
mysql_close();