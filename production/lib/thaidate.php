<?php

function thaidate($strDate) {
    $strYear = date("Y", strtotime($strDate)+543);
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("d", strtotime($strDate));
    $strHour = date("H", strtotime($strDate));
    $strMinute = date("i", strtotime($strDate));
    $strMonthCut = Array("", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");
    $strMonthThai = $strMonthCut[$strMonth];
    return "$strDay/$strMonthThai/$strYear, $strHour:$strMinute";
}

function dateFormat($strDate) {
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