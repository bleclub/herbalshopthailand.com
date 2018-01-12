<?php

function base_url() {
    return "http://localhost/ProjectWeb/mktru/herbalshopthailand.com/production";
    // return "http://localhost/vanlop/projcets/mktru/herbalshopthailand.com/main/production";
}

function base_path() {
    return $_SERVER['DOCUMENT_ROOT'] . "/";
}

function salt_pass($pass) {
    return md5("herbalshop" . $pass);
}

function permalink_create($oldstring){

$string_to_replace     = array ('+' , '/' , '*' , '!' , '(' , ')' , '&' , '%' , '$' , '#' , '@' , '>' , '<' , '?' , ' ', '"', "'");
$string_after_replace  = array ('-' , '-' , '-' , '-' , '-' , '-' , '-' , '-percent-' , '-' , '-' , '-' , '-' , '-' , '-' , '-', '-', '-');
return $newstring         = str_replace($string_to_replace , $string_after_replace , $oldstring , $count); 

}

function lang_path(){
	
	$languages = array('th', 'en');
	$lang = isset($_GET['lang']) ? $_GET['lang'] : "th";
	// handle language selection
	if(in_array($lang, $languages)) {
		return $_SESSION['lang'] = $lang;
	}
	
	// define LANG constant only if it exists in $languages array, otherwise default to "th"
	return isset($_SESSION['lang'], $languages) ? $_SESSION['lang'] : 'th';
}

function translate($text){
	$db = new database();
	$option_translate = array(
			"table" => "bt_translate",
			"condition" => "translate_th='{$text}' or translate_en='{$text}'"
			);
	$query_translate = $db->select($option_translate);
	$rs_ts = $db->get($query_translate);
	if($rs_ts['translate_'.$_SESSION['lang']] == ""){ 
		return $text;
	} else {
		return $rs_ts['translate_'.$_SESSION['lang']];
	}
}

function switch_lg($text)
{
	
	$url = isset($_GET['url']) ? "/".$_GET['url'] : "";
	$page = isset($_GET['page']) ? "/".$_GET['page'] : "";
    $a = isset($_GET['a']) ? "/".$_GET['a'] : "";

    if($a == '/index'){
        $index == '';
    } else {
        $index == $a;
    }

	$dpm = isset($_GET['dpm']) ? "/".$_GET['dpm'] : "";
	$id = isset($_GET['id']) ? "/".$_GET['id'] : "";
	$status = isset($_GET['status']) ? "/".$_GET['status'] : "";
	if($_GET['url'] == "home"){
		return base_url().$dpm."/".$text;
	} else if($_GET['url'] <> "home" && $_GET['status'] <> ""){
		return base_url().$dpm."/".$text.$url.$a.$page.$status.$id; 
	} else {
		return base_url().$dpm."/".$text.$url.$index.$page.$status.$id;
	}
	
}
