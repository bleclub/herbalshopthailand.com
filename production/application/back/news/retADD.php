<?php

require "lib/uploadimg.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new database();
    if (checkimg() == TRUE) {
        $filename = date('YmdHis').rand(0, 9);
        $type = end(explode(".", $_FILES["image"]["name"]));
        $image = $filename . "." . $type;

		$path = "./upload/news/";
		uploadfullimg($filename,$path);

    } else {
        $image = "news_cms.jpg";
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
        "news_createdate" => date('Y-m-d H:i:s'),
		"news_lastupdate" => date('Y-m-d H:i:s'),
		"news_link" => permalink_create($_POST['news_subject_th']),
		"news_order" => '0',
		"officeID" => trim($_POST['officeID']),
		"userID" => $_SESSION[_ss . 'id'],
		
    );
    $query_pd = $db->insert("bt_news", $value_ns);

    if ($query_pd == TRUE) {
		/*Log file*/
			$value_log = array(
				"log_type" => 'News',
				"log_typeID" => $db->insert_id(),
				"log_detail" => 'เพิ่มข่าว'.$_POST['news_categories'],
				"log_date" => date('Y-m-d H:i:s'),
				"log_ip" => $_SERVER["REMOTE_ADDR"],
				"log_user" => $_SESSION[_ss . 'username'] ,
				"log_user_id" => $_SESSION[_ss . 'id']
			);
			$query_log = $db->insert("bt_loginfo", $value_log);
			$_SESSION[_ss . 'msg_result'] = "add";
            
        	header("location:" . $baseUrl . "/back/news");
		
    }
    mysql_close();
}