<?php
	// include('../../../library/core.php');	
	// include('../../../library/database.php');
    // include('../../../library/uploadimg.php');
	require "lib/uploadimg.php" ;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$db = new database();
    $option_im = array(
        "table" => "bt_user",
        "fields" => "profilePicture",
        "condition" => "id='{$_POST['id']}'"
    );
	
	$query_im = $db->select($option_im);
    $rs_im = $db->get($query_im);

    if (checkimg() == TRUE) {
        $filename = date('YmdHis') . rand(0, 9);
        $type = end(explode(".", $_FILES["image"]["name"]));
        $image = $filename . "." . $type;

        $path = base_path() . "/upload/profile/";
		
        uploadimg($filename, 400, 400, $path);
		//uploadfullimg($filename,$path);

        if ($rs_im['profilePicture'] != "profile-cms.jpg") {
            @unlink($path . $rs_im['profilePicture']);
            //@unlink($path . "thumb_" . $rs_im['image']);
        }
		
    } else {
        $image = $rs_im['profilePicture'];
    }
	
	$value_pd = array(
        // "userID" => trim($_POST['userID']),
		"title_id" => trim($_POST['title']),
		"firstnameTH" => trim($_POST['firstnameTH']),
		"lastnameTH" => trim($_POST['lastnameTH']),
		"firstnameEN" => trim($_POST['firstnameEN']),
		"lastnameEN" => trim($_POST['lastnameEN']),
		//"username" => trim($_POST['username']),
		// "paccEmail" => trim($_POST['paccEmail']),
		"personalEmail" => trim($_POST['personalEmail']),
		// "officeID" => trim($_POST['officeID']),
		// "groupID" => trim($_POST['groupID']),
		"userType" => trim($_POST['userType']),
		// "position" => trim($_POST['position']),
		"mobile" => trim($_POST['mobile']),
		"telephone" => trim($_POST['telephone']),
		//"password" => $pwd,
		"profilePicture" => $image
    );
    $query_pd = $db->update("bt_user", $value_pd, "id='{$_POST['id']}'");
	
	
	
	if ($query_pd == TRUE) {
		/*Log file*/
		$value_log = array(
			"log_type" => 'User',
			"log_typeID" => $_POST['id'],
			"log_detail" => 'แก้ไขข้อมูลผู้ใช้ของ '.$_POST['firstnameTH'].' '.$_POST['lastnameTH'],
			"log_date" => date('Y-m-d H:i:s'),
			"log_ip" => $_SERVER["REMOTE_ADDR"],
			"log_user" => $_SESSION[_ss . 'username'] ,
			"log_user_id" => $_SESSION[_ss . 'id']
		);
		$query_log = $db->insert("bt_loginfo", $value_log); 
	$_SESSION[_ss . 'msg_result'] = "edit";
	header("location:" . $baseUrl . "/back/user/edit/".$_POST['id']);
    }
    mysql_close();
}
?>