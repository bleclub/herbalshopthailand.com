<?php

/*
 * php code///////////**********************************************************
 */
$db = new database();
$option_im = array(
    "table" => "bt_media",
    "fields" => "filename",
    "condition" => "id='{$_GET['id']}'"
);
$query_im = $db->select($option_im);
$rs_im = $db->get($query_im);

$query = $db->delete("bt_media", "id='{$_GET['id']}'");
if ($query == TRUE) {
    if ($rs_im['filename'] != "ecimage.jpg") {
        $path = "../2017/mediaupload/upload/";
        @unlink($path . $rs_im['filename']); 
    }
	$_SESSION[_ss . 'msg_result'] = TRUE;

    header("location:" . $baseUrl . "/back/media");
} else {
    echo "error";
}
mysql_close();
