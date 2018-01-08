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

		$path = './upload/banner/';
		uploadfullimg( $filename , $path);
		
		$cfg_thumb=  (object) array(
			"source"=>"./upload/banner/".$image,				// ตำแหน่งและชื่อไฟล์ต้นฉบับ
			"destination"=>"./upload/banner/thumb/".$image,	// ตำแแหน่งและชื่อไฟล์ที่สร้างใหม่ ถ้าเลือกสร้างเป็นไฟล์ใหม่
			"width"=>320,		 //  กำหนดความกว้างรูปใหม่
			"height"=>180,		//  กำหนดความสูงรูปใหม่
			"background"=>"",	// กำหนดสีพื้นหลังรูปใหม่ (#FF0000) ถ้าไม่กำหนดและ เป็น gif หรือ png จะแสดงเป็นโปร่งใส
			"output"=>"",		//  กำหนดนามสกุลไฟล์ใหม่ jpg | gif หรือ png ถ้าไม่กำหนด จะใช้ค่าเริ่มต้นจากต้นฉบับ
			"show"=>0,			//	แสดงเป็นรูปภาพ หรือสร้างเป็นไฟล์ 0=สร้างเป็นไฟล์ | 1=แสดงเป็นรูปภาพ
			"crop"=>0				//  กำหนด crop หรือ ไม่ 0=crop | 1=crop
		);
		createthumb(
			$cfg_thumb->source,
			$cfg_thumb->destination,
			$cfg_thumb->width,
			$cfg_thumb->height,
			$cfg_thumb->background,
			$cfg_thumb->output,
			$cfg_thumb->show,
			$cfg_thumb->crop		
		); 
		
		 if ($rs_im['pages_photoslide'] != "content_cms.jpg") {
			@unlink($path . $rs_im['pages_photoslide']);
			@unlink($path."thumb/" . $rs_im['pages_photoslide']);
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
		"pages_link" => $_POST['pages_link'],
		"pages_order" => '0',
		"officeID" => trim($_POST['officeID']),
		"userID" => $_SESSION[_ss . 'id'],
		
    );
    $query_pd = $db->update("bt_pages", $value_ns, "pages_id='{$_POST['pages_id']}'");

    if ($query_pd == TRUE) {
		/*Log file*/
			$value_log = array(
				"log_type" => 'Banner',
				"log_typeID" => $db->insert_id(),
				"log_detail" => 'Edit banner',
				"log_date" => date('Y-m-d H:i:s'),
				"log_ip" => $_SERVER["REMOTE_ADDR"],
				"log_user" => $_SESSION[_ss . 'username'] ,
				"log_user_id" => $_SESSION[_ss . 'id']
			);
			$query_log = $db->insert("bt_loginfo", $value_log);
			$_SESSION[_ss . 'msg_result'] = "edit"; 
			if($_POST['pages_categories'] == 'popup'){
				header("location:" . $baseUrl . "/back/gallery/edit/popup/".$_POST['pages_id']);				
			} else {
				header("location:" . $baseUrl . "/back/banner/index/");				
			}
    }
    mysql_close();
}