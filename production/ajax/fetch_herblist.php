<?php
include('../lib/database.php');
include('../lib/core.php');


$db = new database();

$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
$baseUrl = $_POST['baseUrl'];
$title = $_POST['pagetitle'];

//throw HTTP error if page number is not valid
if(!is_numeric($page_number)){
	header('HTTP/1.1 500 Invalid page number!');
	exit();
}

function ckdate($strDate) {
    $strYear = date("Y", strtotime($strDate));
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("d", strtotime($strDate));
    $strHour = date("H", strtotime($strDate));
    $strMinute = date("i", strtotime($strDate));
    $strMonthCutEng = Array("", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	// $strMonthCutTh = Array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนานยน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
    // $strMonthThai = $strMonthCutTh[$strMonth];
	$strMonthEng = $strMonthCutEng[$strMonth];
	// if($lg == "th") { 
    // 	return "$strDay $strMonthThai $strYear";	
	// } else {
		return "$strMonthEng $strDay, $strYear";
	// }
}

// function translate($text,$lg){
// 	$db = new database();
// 	$option_translate = array(
// 			"table" => "bt_translate",
// 			"condition" => "translate_th='{$text}' or translate_en='{$text}'"
// 			);
// 	$query_translate = $db->select($option_translate);
// 	$rs_ts = $db->get($query_translate);
// 	if($rs_ts['translate_'.$lg] == ""){ 
// 		return $text;
// 	} else {
// 		return $rs_ts['translate_'.$lg];
// 	}
// }


//sanitize post value

$item_per_page = 8;
//get current starting point of records
$position = ($page_number * $item_per_page);

//Limit our results within a specified range. 
// if($dpmcode == "1200"){
// 	$results = $db->query("select * from btview_pages where pages_categories='{$title}' order by pages_createdate desc LIMIT $position, $item_per_page");
// } else { 
	$results = $db->query("select * from btview_pages where pages_categories='{$title}' order by pages_date desc LIMIT $position, $item_per_page");
// }
	
while($rs_pagesloop = $db->get($results)) { 
			
			echo  '<div class="col-lg-3 col-md-6 col-sm-6 wow fadeInDown">
						<img src="'.$baseUrl.'/upload/'.$title.'/'.$rs_pagesloop['pages_photoslide'].'" class="img-responsive" alt="">
						<div class="content">
							<h5>'.$rs_pagesloop['pages_subject_th']."...".'</h5>
							<p><b>สมุนไพร</b><br>'.ckdate($rs_pagesloop['pages_date']).'</p>
							
							<p><a href="'.$baseUrl.'/'.$title.'/'.permalink_create($rs_pagesloop['pages_link']).'">รายละเอียดเพิ่มเติม</a></p>							
						</div>
					</div>';
}

// <p>'.mb_substr($rs_pagesloop['pages_subject_th'], 0,100, "UTF-8")."...".'</p>
?>

		
            
              
                
              
                
              
                
                  
                  
              