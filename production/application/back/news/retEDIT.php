<?php

require "lib/uploadimg.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new database();
	$option_im = array(
        "table" => "bt_news",
        "fields" => "news_photo, news_photoslide",
        "condition" => "news_id='{$_POST['news_id']}'"
    );
	$query_im = $db->select($option_im);
    $rs_im = $db->get($query_im);
	
    if (checkimg() == TRUE) {
        $filename = date('YmdHis').rand(0, 9);
        $type = end(explode(".", $_FILES["image"]["name"]));
        $image = $filename . "." . $type;

		$path = './upload/news/';
		uploadfullimg( $filename , $path);
		
		 if ($rs_im['news_photoslide'] != "news_cms.jpg") {
            @unlink($path . $rs_im['news_photoslide']);
            // @unlink($path . "thumb_" . $rs_im['news_photoslide']);
			// @unlink($path . $rs_im['news_photo']);
        }
		
    } else {
        $image = $rs_im['news_photoslide'];
    }
	
	
	//$pwd = trim(salt_pass($_POST['password']));
    $value_ns = array(
		"news_categories" => trim($_POST['news_categories']),
		"news_subject_th" => trim($_POST['news_subject_th']),
		"news_subject_en" => trim($_POST['news_subject_en']),
		"news_title_th" => trim($_POST['news_title_th']),
		"news_title_en" => trim($_POST['news_title_en']),
		"news_content_th" => trim($_POST['news_content_th']),
		"news_content_en" => trim($_POST['news_content_en']),
		"news_photoslide" => $image,
		"news_slide" => trim($_POST['news_slide']),
		"news_date" => trim($_POST['news_date']),
		"news_lastupdate" => date('Y-m-d H:i:s'),
		"news_link" => trim($_POST['news_link']),
		"news_order" => '0',
		"officeID" => trim($_POST['officeID']),
		"userID" => $_SESSION[_ss . 'id'],
		
    );
    $query_pd = $db->update("bt_news", $value_ns, "news_id='{$_POST['news_id']}'");

    if ($query_pd == TRUE) {
		/*Log file*/
			$value_log = array(
				"log_type" => 'News',
				"log_typeID" => $db->insert_id(),
				"log_detail" => 'แก้ไข '.$_POST['news_categories'],
				"log_date" => date('Y-m-d H:i:s'),
				"log_ip" => $_SERVER["REMOTE_ADDR"],
				"log_user" => $_SESSION[_ss . 'username'] ,
				"log_user_id" => $_SESSION[_ss . 'id']
			);
			$query_log = $db->insert("bt_loginfo", $value_log);
			$_SESSION[_ss . 'msg_result'] = "edit"; 
        
			header("location:" . $baseUrl . "/back/news");	
    }
    mysql_close();
}