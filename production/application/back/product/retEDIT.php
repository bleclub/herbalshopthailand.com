<?php

require "lib/uploadimg.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = new database();
	$option_im = array(
        "table" => "bt_pages",
        "fields" => "pages_photo, pages_photoslide",
        "condition" => "pages_id='{$_POST['pages_id']}'"
    );
	$query_im = $db->select($option_im);
    $rs_im = $db->get($query_im);
	
    if (checkimg() == TRUE) {
        $filename = date('YmdHis').rand(0, 9);
        $type = end(explode(".", $_FILES["image"]["name"]));
        $image = $filename . "." . $type;

		$path = './upload/product/';
		uploadfullimg( $filename , $path);
		
		 if ($rs_im['pages_photoslide'] != "product_cms.jpg") {
            @unlink($path . $rs_im['pages_photoslide']);
            // @unlink($path . "thumb_" . $rs_im['pages_photoslide']);
			// @unlink($path . $rs_im['pages_photo']);
        }
		
    } else {
        $image = $rs_im['pages_photoslide'];
    }
	
	
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
		"pages_lastupdate" => date('Y-m-d H:i:s'),
		"pages_link" => permalink_create($_POST['pages_subject_th']),
		"pages_order" => '0',
		"category_id" => trim($_POST['category']),
		"officeID" => trim($_POST['officeID']),
		"userID" => $_SESSION[_ss . 'id'],
		
    );
    $query_pd = $db->update("bt_pages", $value_ns, "pages_id='{$_POST['pages_id']}'");

    if ($query_pd == TRUE) {
		/*Log file*/
			$value_log = array(
				"log_type" => 'Product',
				"log_typeID" => $db->insert_id(),
				"log_detail" => 'แก้ไขผลิตภัณฑ์',
				"log_date" => date('Y-m-d H:i:s'),
				"log_ip" => $_SERVER["REMOTE_ADDR"],
				"log_user" => $_SESSION[_ss . 'username'] ,
				"log_user_id" => $_SESSION[_ss . 'id']
			);
			$query_log = $db->insert("bt_loginfo", $value_log);
			$_SESSION[_ss . 'msg_result'] = "edit"; 
        
			header("location:" . $baseUrl . "/back/product");	
    }
    mysql_close();
}